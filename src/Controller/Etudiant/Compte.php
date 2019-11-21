<?php


namespace App\Controller\Etudiant;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class Compte extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     * @param UserRepository $userRepository
     * @return Response
     * @throws \Exception
     */
    public function profil(UserRepository $userRepository){
        $user = $this->getUser();
        return $this->render('Compte/compte.html.twig',array('user'=>$user));
    }
}