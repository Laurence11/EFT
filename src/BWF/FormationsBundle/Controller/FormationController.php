<?php

namespace BWF\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BWF\FormationsBundle\Entity\Formations;
use BWF\FormationsBundle\Form\FormationsType;
use BWF\FormationsBundle\Form\FormationsEditType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FormationController extends Controller {
    /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function listeFormationsAction() {
        
        $rsFormations = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFFormationsBundle:Formations')
                         ->findAll();
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('BWFFormationsBundle:Formations:listeFormations.html.twig',
                array('formations' => $rsFormations));
    }
    
    /**
     * Action delete : supprimer une formation
     * @return vieuw : Formations/listeFormations 
     */
    
    public function deleteFormationAction($id) {
        
       $modelManager = $this->getDoctrine()->getManager();
       $rFormation = $modelManager->find('BWFFormationsBundle:Formations',$id);
                      
       if (!$rFormation){
           throw new NotFoundHttpException('Enregistrement non trouvé !');
       }
       
        $modelManager->remove($rFormation);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('bwf_formations_homepage',
                array('slug' => 'formations')));
        
    }
    
     /**
     * Action ajouter : ajout de nouvelles formations
     * @return vieuw : Formations/addformation
     */
    
     public function addformationAction() {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rFormation = new Formations();
        
        $form = $this->createForm(new FormationsType(),$rFormation);
        
        $requete = $this->getRequest();
        
        // Si c'est POST, on ajoute
                   if ($requete->isMethod('POST')) {
                       // On ajuste les véleurs aux champs
                           $form->bind($requete);
                           $post = $form->getData();

                       // On stocke et on exécute
                           $modelManager->persist($post);
                           $modelManager->flush();
                           
        return $this->redirect($this->generateUrl('bwf_formations_homepage' , array('slug' => 'formations')));
                   }
        return $this->render('BWFFormationsBundle:Formations:addFormations.html.twig',
                                array('form' => $form->createView(),
                                      'formations' => $rFormation));
     
     }
     
      public function editFormationAction($id) {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rFormations = $modelManager->getRepository('BWFFormationsBundle:Formations')
                                  ->find($id);
        
        $form = $this->createForm( new FormationsEditType(),$rFormations);
            
        // je fais un persist/flush
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->bind($request);
            $rFormations = $form->getData();
            
            // On stocke et on exécute
                $modelManager->persist($rFormations);
                $modelManager->flush();
                               
        return $this->redirect($this->generateUrl('bwf_formations_edit'));
        }
        return $this->render('BWFFormationsBundle:Formations:editFormations.html.twig',
                
                                array ('form' => $form->createView(), 'formations' => $rFormations));
        
      }  
  /**
     * Action afficher : affichage des foramtions pour le site d'admin
     * @return vieuw : articles/liste
     */
    public function listeFormationsAdminAction() {
        
        $rsFormations = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFFormationsBundle:Formations')
                         ->findAll();
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('BWFFormationsBundle:Formations:listeFormationsAdmin.html.twig',
                array('formations' => $rsFormations));
    }
}
