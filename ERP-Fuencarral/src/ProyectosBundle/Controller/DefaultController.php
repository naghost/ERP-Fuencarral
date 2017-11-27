<?php

namespace ProyectosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProyectosBundle:Default:index.html.twig');
    }
}
