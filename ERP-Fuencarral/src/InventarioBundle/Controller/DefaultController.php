<?php

namespace InventarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventarioBundle:Default:index.html.twig');
    }
     public function almacenAction()
    {
        return $this->render('InventarioBundle:Default:almacen.html.twig');
    }
     public function proveedorAction()
    {
        return $this->render('InventarioBundle:Default:proveedor.html.twig');
    }
         public function verAction()
    {
        return $this->render('InventarioBundle:Default:ver.html.twig');
    }
}
