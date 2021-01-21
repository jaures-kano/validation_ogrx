<?php


namespace App\Controller;


use App\Repository\DepRepositoryA;
use App\Service\DepServiceA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{

    /**
     * @Route("/choices" , name="choices")
     */
    public function goChoices()
    {
        return $this->render('choices.html.twig');
    }


    /**
     * @Route("/choices/property/{id}" , name="choices.redirect.target")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function redirectTarget($id, Request $request)
    {
        $session = $request->getSession();
        $session->start();
        $session->set('choice', $id);
        dump($session->get('choice'));

        return new Response('<body></body>');

    }

    /**
     * @Route("/choices/admin/target" , name="choices.admin.redirect.target")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function redirectTargetAdmin()
    {

        return $this->render('admin/admin.choices.html.twig');

    }

    /**
     * @Route("/choices/admin/{id}" , name="choices.redirect.admin")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function reditectAdmin($id, Request $request)
    {
        //dump($id);
        $session = $request->getSession();
        $session->start();
        $session->set('choice', $id);
        //dump($session->get('choice', $id));
        return $this->render('admin/admin.html.twig');
    }

    /**
     * @Route("/admin/progression" , name="admin.progression")
     */
    public function showProgression(DepServiceA $depService, Request $request)
    {
        $session = $request->getSession();
        if ($session->get('choice')=='OGRA') {

            $deps = $depService->getProgressionDeps();
            $reseaux = $depService->getReseauProgression();


            return $this->render('admin/progression.html.twig', [
                'deps' => $deps,
                'reseaux' => $reseaux
            ]);
        }


    }


    /**
     * @Route("/admin/histo/traitement/{type}", name="admin.histo.dep")
     */
    public function histoTraitement(string $type, DepRepositoryA $depRepository, Request $request)
    {


        $session = $request->getSession();

        if ($session->get('choice')=='OGRA') {

            if ($type == 'dep') {
                $deps = $depRepository->getListeDepTraites();
            } else {
                $deps = $depRepository->getListeReseauTraites();
            }



            return $this->render('admin/admin.histo.dep.html.twig', [
                'deps' => $deps,
                 'type' => $type
            ]);
        }

    }

}