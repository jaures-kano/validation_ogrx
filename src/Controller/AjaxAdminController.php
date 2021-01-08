<?php


namespace App\Controller;


use App\Entity\DepLockA;
use App\Entity\User;
use App\Repository\DepLockARepository;
use App\Repository\UserRepository;
use App\Repository\ValidationOgraRepository;
use App\Util\UtilOgrb;
use App\Util\UtilOgrx;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjaxAdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/attribute/dep" , name="attribute_dep", methods={"POST"})
     */
    public function attributeDepToUser(Request $request, DepLockARepository $depLockARepository, ValidationOgraRepository $ograRepository, UserRepository $userRepository)
    {

        $dep = $request->get('dep');

        $tabDep = explode(',', $dep);

        $idAgent = $request->get('id_agent');



        // pour chaque département selectionné
        for ($i=0; $i<count($tabDep); $i++) {

            $depLockARepository->attributeDepToUser($idAgent, $tabDep[$i]);
            $ograRepository->lockLignes($tabDep[$i], $idAgent);

        }


//        for ($i=0; $i<count($tabDep); $i++) {
//
//            //on vide l'iduser du dep pour la selection/déselection
//            $depLockARepository->emptyUserDepLock($tabDep[$i]);
//
//            $depLockARepository->attributeDepToUser($idAgent, $tabDep[$i]);
//
//            $ograRepository->lockLignes($tabDep[$i], $idAgent);
//
//        }



        return  $this->json('OK', Response::HTTP_OK, [], [

        ]);
    }
}