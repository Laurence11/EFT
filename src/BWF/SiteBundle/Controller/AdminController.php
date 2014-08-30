<?php
/**
 * Description of AdminController
 *
 * @author macbook
 */
namespace BWF\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller {
    /**
     * @Template("BWFSiteBundle:Admin:administration.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}
