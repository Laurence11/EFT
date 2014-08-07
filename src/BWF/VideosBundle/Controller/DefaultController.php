<?php

namespace BWF\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BWFVideosBundle:Default:index.html.twig', array('name' => $name));
    }
}
