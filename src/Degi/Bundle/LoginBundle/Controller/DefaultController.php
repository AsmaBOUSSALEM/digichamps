<?php

namespace Degi\Bundle\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DegiLoginBundle:Default:index.html.twig');
    }
}
