<?php

namespace Newwly\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('NewwlyDashboardBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('NewwlyDashboardBundle:Default:index.html.twig');
    }
}
