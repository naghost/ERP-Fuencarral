<?php

namespace ParteHorasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParteHorasBundle:Default:index.html.twig');
    }
}
