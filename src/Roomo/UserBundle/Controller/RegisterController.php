<?php

namespace Roomo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Roomo\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    
    public function registerAction( Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('username', 'text')
        ->add('email', 'text')
        ->add('password', 'password')
        ->getForm()
    ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $user = new User();
            $user->setUsername($data['username']);
            $user->setEmail($data['email']);
            $user->setPassword($this->encodePassword($user, $data['password']));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->authenticateUser($user);
            $url = $this->generateUrl('room_new');
            return $this->redirect($url);
        }
        return $this->render('UserBundle:Register:register.html.twig', array(
           
            'form'   => $form->createView(),
        ));
    }
    private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user)
        ;

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }
    private function authenticateUser(User $user)
    {
        $providerKey = 'secured_area'; // your firewall name
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

        $this->container->get('security.context')->setToken($token);
    }
    
    
}