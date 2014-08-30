<?php
/**
 * Description of CategorieController
 *
 * @author macbook
 */
namespace BWF\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategorieController extends Controller
{
/**
     * Action detail : detail de la page
     * @param type $slug
     * @return vieuw : Categories/detail
     */
    public function detailAction($slug) {
        //je vais chercher les infos de la page qui correspond au slug
        $rCategorie = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('BWFSiteBundle:Categories')
                            ->findOneBySlug($slug);
        
        //je balance cette rubrique a la vue detail
        return $this->render('BWFSiteBundle:Categories:detail.html.twig',
                array('categorie' => $rCategorie));       
       
    } 
    /**
     * Action menu : liste des categories pour le menu
     * @return vieuw : Categories/menu 
     */
    public function menuAction() {
        
         $rsCategories = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('BWFSiteBundle:Categories')
                          ->findAll();
         
        //je balance cette rubrique a la vue detail
        return $this->render('BWFSiteBundle:Categories:menu.html.twig',
                array('categories' => $rsCategories));
        
    }
}

