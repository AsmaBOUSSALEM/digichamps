<?php

namespace Degi\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DegiUserBundle:Default:index.html.twig');
    }
}
