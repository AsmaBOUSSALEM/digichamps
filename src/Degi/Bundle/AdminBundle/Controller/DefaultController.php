<?php

namespace Degi\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DegiAdminBundle:Default:index.html.twig');
    }
}
