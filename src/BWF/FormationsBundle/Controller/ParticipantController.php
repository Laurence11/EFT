<?php

/**
 * Description of ParticipantController
 *
 * @author macbook
 */
namespace BWF\FormationsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BWF\FormationsBundle\Entity\Participants;
use BWF\FormationsBundle\Form\ParticipantsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ParticipantController extends Controller {
    
       public function addParticipantAction() {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rParticipant = new Participants();
        /**$rReservation = new Reservations();*/
        
        $form = $this->createForm(new ParticipantsType(),$rParticipant);
        
        $requete = $this->getRequest();
        
        // Si c'est POST, on ajoute
                   if ($requete->isMethod('POST')) {
                       // On ajuste les valeurs aux champs
                           $form->bind($requete);
                           $ajout = $form->getData();

                       // On stocke et on exécute
                           $modelManager->persist($ajout);
                           $modelManager->flush();
                           
        //return $this->redirect($this->generateUrl('ieps_site_de_base_pages' , array('slug' => 'le_blog')));
                   }
        return $this->render('BWFFormationsBundle:Participants:nouveauParticipant.html.twig',
                                array('form' => $form->createView(),
                                      'participant' => $rParticipant));
     
     }
     
     public function deleteParticipantAction($id) {
        
       $modelManager = $this->getDoctrine()->getManager();
       $rFormation = $modelManager->find('BWFFormationsBundle:Participants',$id);
                      
       if (!$rFormation){
           throw new NotFoundHttpException('Enregistrement non trouvé !');
       }
       
        $modelManager->remove($rFormation);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('bwf_formations_homepage',
                array('slug' => 'formations')));
        
    }
    
    /**
     * Action afficher : affichage des participants
     * @return vieuw : participants/listeParticipants
     */
    public function listeParticipantsAction() {
        
        $rsParticipants = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFFormationsBundle:Participants')
                         ->findAll();
        
        //je balance cette rubrique a la vue administration participants
        return $this->render('BWFFormationsBundle:Participants:listeParticipants.html.twig',
                array('participant' => $rsParticipants));
    }
}
