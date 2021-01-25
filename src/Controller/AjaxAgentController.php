<?php


namespace App\Controller;


use App\Repository\ValidationOgraRepository;
use App\Service\TraitementAgentService;
use Doctrine\ORM\EntityManagerInterface;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjaxAgentController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    private $ograRepository;
    private $traitementAgentService;

    public function __construct(ValidationOgraRepository $ograRepository, TraitementAgentService $traitementAgentService)
    {
        $this->ograRepository = $ograRepository;
        $this->traitementAgentService = $traitementAgentService;
    }

    /**
     * @param Request $request
     * @Route("/valider-recherche", name="valider_recherche")
     */
    public function validerRecherche(Request $request)
    {
        $site = $request->get('site');
        $id = $request->get('id');

        $this->traitementAgentService->getChampRecherche($id, $site);

        return  $this->json('OK', Response::HTTP_OK, [], []);
    }


    /**
     * @Route("/valider-all-comments" , name="valider_all_comments")
     */
    public function validAllComments(Request $request)
    {
        //validComm=true&codens=" + codens + "&com=" + commvali + '&id=' + id
        $id = $request->get('id');
        $codens = $request->get('codens');
        $comments = $request->get('com');
    }
}