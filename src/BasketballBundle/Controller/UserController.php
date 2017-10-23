<?php

namespace BasketballBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BasketballBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use BasketballBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends Controller
{
    /**
     * @Route("/register")
     */
    public function registerAction(Request $request)
    {   
        $user = new User();
//        $form = $this->createForm(new UserType(), $user, array());
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            die ('OK');
        }
        
        return $this->render('BasketballBundle:User:register.html.twig', array(
            'form' => $form
        ));
    }

    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('BasketballBundle:User:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
        return $this->render('BasketballBundle:User:logout.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showProfile")
     */
    public function showProfileAction()
    {
        return $this->render('BasketballBundle:User:show_profile.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('BasketballBundle:User:delete.html.twig', array(
            // ...
        ));
    }

}
