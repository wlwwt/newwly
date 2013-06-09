<?php

namespace Newwly\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewspaperController extends Controller
{
    public function createAction()
    {
        return $this->render('NewwlyDashboardBundle:Newspaper:create.html.twig');
    }
    
    public function listAction()
    {
        return $this->render('NewwlyDashboardBundle:Newspaper:list.html.twig');
    }

}
