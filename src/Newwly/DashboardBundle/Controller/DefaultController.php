<?php

namespace Newwly\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $flash = $this->get('translator')->trans('Info: Your are in the dashboard');
//        $this->get('session')->getFlashBag()->add('info', $flash);
        return $this->render('NewwlyDashboardBundle:Default:index.html.twig');
    }
}
