<?php

namespace FabricacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FabricacionBundle:Default:index.html.twig');
    }
}
