<?php

namespace BWF\ArticlesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
            
    {
        $message = 'message acceuil EFT';
                
        return $this->container->Get('templating')->renderResponse('BWFSiteBundle:Default:index.html.twig', array('message' => $message));
    }
}
