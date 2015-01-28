<?php

namespace Roomo\RoomrentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RoomrentBundle:Default:index.html.twig', array('name' => $name));
    }
}
