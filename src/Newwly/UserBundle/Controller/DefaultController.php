<?php

namespace Newwly\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		return $this->forward('FOSUserBundle:Security:login');
    }
}
