<?php

namespace PuntoVentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PuntoVentaBundle:Default:index.html.twig');
    }
}
