<?php


namespace App\Controller;


use App\Repository\ValidationOgraRepository;
use App\Service\TraitementAgentService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    private $ograRepository;
    private $traitementAgentService;

    public function __construct(ValidationOgraRepository $ograRepository, TraitementAgentService $traitementAgentService)
    {
        $this->ograRepository = $ograRepository;
        $this->traitementAgentService = $traitementAgentService;
    }

    /**
     * @Route("/choices/property/{id}" , name="choices.agent.redirect.target")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function redirectTarget($id, Request $request)
    {
        $session = $request->getSession();
        $session->start();
        $session->set('choice', $id);
        $_ENV['USER_CHOICE'] = $id;

        $userId = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $linesToProcess = $this->traitementAgentService->getNextLine($userId);
        $count = count($linesToProcess);

        dump($linesToProcess);

        dump($_ENV['USER_CHOICE']);

        if ($id == 'OGRA') {

        return $this->render('agent/agent.index.html.twig', [
                'choice' => $id,
                'fiches' => $linesToProcess,
                'count' => $count
            ]);
        }
    }


    /**
     * @Route("/fiche-detail/{id}", name="fiche_detail")
     */
    public function getFicheDetail(int $id, Request $request)
    {
        //$session = $request->getSession();
        if ($_ENV['USER_CHOICE']=='OGRA') {
            $fiche = $this->ograRepository->find($id);
        }


        return $this->render('view/fiche.detail.html.twig', [
            'fiche' => $fiche,
        ]);
    }



}