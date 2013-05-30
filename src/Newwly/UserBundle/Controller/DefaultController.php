<?php

namespace Newwly\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('NewwlyUserBundle:Default:index.html.twig', array('name' => $name));
		return $this->forward('FOSUserBundle:Security:login');
    }
}
