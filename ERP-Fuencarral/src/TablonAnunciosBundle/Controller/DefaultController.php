<?php

namespace TablonAnunciosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TablonAnunciosBundle:Default:index.html.twig');
    }
}
