<?php


namespace App\Controller;


use App\Entity\User;
use App\Repository\DepLockARepository;
use App\Repository\UserRepository;
use App\Repository\ValidationOgraRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjaxAdminController extends AbstractController
{

    private $depLockARepository;
    private $ograRepository;
    private $userRepository;

    public function __construct( DepLockARepository $depLockARepository, ValidationOgraRepository $ograRepository, UserRepository $userRepository)
    {

        $this->depLockARepository = $depLockARepository;
        $this->ograRepository = $ograRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/attribute/dep" , name="attribute_dep", methods={"POST"})
     */
    public function attributeDepToUser(Request $request)
    {

        $session = $request->getSession();

        if ($session->get('choice')=='OGRA') {

            $dep = $request->get('dep');

            $tabDep = explode(',', $dep);

            $idAgent = $request->get('id_agent');

            // pour chaque département selectionné
            for ($i=0; $i<count($tabDep); $i++) {

                $this->depLockARepository->attributeDepToUser($idAgent, $tabDep[$i]);
                $this->ograRepository->lockLignes($tabDep[$i], $idAgent);

            }
            return  $this->json('OK', Response::HTTP_OK, [], []);
        }

    }

    /**
     * @Route("/delete/dep" , name="delete_dep", methods={"POST"})
     */
    public function deleteDep(Request $request)
    {
        $session = $request->getSession();

        if ($session->get('choice')=='OGRA') {

            $dep = $request->get('dep');

            $depLoc = $this->depLockARepository->findBy([
                'dep' => $dep
            ]);

            $newUser = new User();
            $depLoc[0]->setIduser($newUser);
            $this->ograRepository->lockLignes($dep, null);

            return  $this->json('OK', Response::HTTP_OK, [], []);
        }

    }

    /**
     * @Route("/show-histo-trait", name="show_histo_dep_traitement")
     */
    public function showHistoDepTrait(Request $request)
    {
        $session = $request->getSession();



        if ($session->get('choice') == 'OGRA') {

            if ($request->query->has('dep')) {

                $dep = $request->get('dep');
                $type = 'dep';

                $listeHisto = $this->ograRepository->getHistoTraitementDep($dep);

            } else if ($request->query->has('res')) {

                $res = $request->get('res');
                $type = 'reseau';
                $listeHisto = $this->ograRepository->getHistoTraitementRes($res);
            }


            dump($listeHisto);
            return $this->render('admin/admin.liste.histo.html.twig', [
                'listehisto' => $listeHisto,
                'typechoice' => $type

            ]);

        }
    }
}