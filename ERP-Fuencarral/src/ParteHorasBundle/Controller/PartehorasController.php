<?php

namespace ParteHorasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ParteHorasBundle\Form\PartehorasType;

class PartehorasController extends Controller
{
    public function allAction()
    {
    	$repository = $this->getDoctrine()->getRepository('ParteHorasBundle:Partehoras');

    	$parte = $repository->findAll();

        return $this->render('ParteHorasBundle:Partehoras:all.html.twig',array("parte"->$parte));
    }

    public function nuevoAction()
    {

    	$form = $this->createForm(PartehorasType::class);
    	return $this->render('ParteHorasBundle:Partehoras:nuevo.html.twig',array("form"=>$form->createView() ));
    }
}