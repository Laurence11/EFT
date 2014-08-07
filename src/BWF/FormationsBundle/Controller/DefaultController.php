<?php

namespace BWF\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BWFFormationsBundle:Default:index.html.twig', array('name' => $name));
    }
}
