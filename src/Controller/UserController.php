<?php


namespace App\Controller;


use App\Repository\DepLockARepository;
use App\Repository\DepRepositoryA;
use App\Repository\UserRepository;
use App\Service\DepServiceA;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/create_admin/{id}")
     */
    public function createAdmin(int $id, UserRepository $userRepository, EntityManagerInterface $manager)
    {
        $user = $userRepository->find($id);
        $roles[0] = 'ROLE_ADMIN';
        $user->setRoles($roles);
        $manager->persist($user);
        $manager->flush();
        return new Response('<body></body>');
    }


    /**
     * @Route("/users/all" , name="show.users.all")
     * @param UserRepository $userRepository
     */
    public function allUsers(UserRepository $userRepository)
    {
        $users = $userRepository->getAllUsers();

        //return new Response('<body></body>');
        return $this->render('admin/show.users.html.twig', [
            'users' => $users

        ]);
    }

    /**
     * @param int $id
     * @Route("/users/one/{id}", name="show.users.one")
     */
    public function showOne(int $id, UserRepository $userRepository, DepServiceA $depService, DepRepositoryA $depRepository)
    {
        $user = $userRepository->getOneUsers($id);
        $depToAttribute = $depService->getDepToAttribute();
        $userDeps = $depRepository->getDepAAttributeToUser($id);
        //dump($userDeps);
        return $this->render('admin/show.user.one.html.twig', [
            'user' => $user,
            'depToAttribute' => $depToAttribute,
            'userDeps' => $userDeps

        ]);
    }
}