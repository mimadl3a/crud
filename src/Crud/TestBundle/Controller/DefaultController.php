<?php

namespace Crud\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CrudTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
