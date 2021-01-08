<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TargetController extends AbstractController
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
        dump($id);
        $session = $request->getSession();
        $session->start();
        $session->set('choice', $id);
        dump($session->get('choice', $id));
        return $this->render('admin/admin.html.twig');
    }

}