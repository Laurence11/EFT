<?php
/**
 * Description of VideoController
 *
 * @author macbook
 */
namespace BWF\VideosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BWF\VideosBundle\Entity\Videos;
use BWF\VideosBundle\Form\VideosType;
use BWF\VideosBundle\Form\VideosEditType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * Description of VideoController
 *
 * @author macbook
 */

class VideoController extends Controller {
     /**
     * Action afficher : affichage des videos
     * @return vieuw : videos /listeVideos
     */
    public function listeVideosAction() {
        
        $rsVideos = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFVideosBundle:Videos')
                         ->findBy(array('categorie' => 4));
        
        //je balance cette rubrique a la vue listeVideos
        return $this->render('BWFVideosBundle:Videos:listeVideos.html.twig',
                array('videos' => $rsVideos));
    }
    public function videoVedetteAction() {
        
        $rVideo = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFVideosBundle:Videos')
                         ->findOneBy(array('vedette' => 1));
        
        //je balance cette rubrique a la vue listeBlogs
        return $this->render('BWFVideosBundle:Videos:videoVedette.html.twig',
                array('video' => $rVideo));
    }
    
    /**
     * Action delete : supprimer une video
     * @return vieuw : Videos/listeVideos 
     */
    
    public function deleteVideoAction($id) {
        
       $modelManager = $this->getDoctrine()->getManager();
       $rVideo = $modelManager->find('BWFVideosBundle:Videos',$id);
                      
       if (!$rVideo){
           throw new NotFoundHttpException('Enregistrement non trouvé !');
       }
       
        $modelManager->remove($rVideo);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('bwf_videos_homepage'));
        
    }
    
     /**
     * Action ajouter : ajout de nouvelles formations
     * @return vieuw : Formations/addformation
     */
    
     public function addVideoAction() {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rVideo = new Videos();
        
        $form = $this->createForm(new VideosType(),$rVideo);
        
        $requete = $this->getRequest();
        
        // Si c'est POST, on ajoute
                   if ($requete->isMethod('POST')) {
                       // On ajuste les véleurs aux champs
                           $form->bind($requete);
                           $post = $form->getData();

                       // On stocke et on exécute
                           $modelManager->persist($post);
                           $modelManager->flush();
                           
        return $this->redirect($this->generateUrl('bwf_Videos_homepage'));
                   }
        return $this->render('BWFVideosBundle:Videos:addVideo.html.twig',
                                array('form' => $form->createView(),
                                      'videos' => $rVideo));
     
     }
     
      public function editVideoAction($id) {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rVideos = $modelManager->getRepository('BWFVideosBundle:Videos')
                                  ->find($id);
        
        $form = $this->createForm( new VideosEditType(),$rVideos);
            
        // je fais un persist/flush
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->bind($request);
            $rVideos = $form->getData();
            
            // On stocke et on exécute
                $modelManager->persist($rVideos);
                $modelManager->flush();
                               
        return $this->redirect($this->generateUrl('bwf_Videos_homepage'));
        }
        return $this->render('BWFVideosBundle:Videos:editVideo.html.twig',                
                                array ('form' => $form->createView(), 'videos' => $rVideos));
        
      } 
      
      public function listeVideosAdminAction() {
        
        $rsVideos = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFVideosBundle:Videos')
                         ->findBy(array('categorie' => 4));
        
        //je balance cette rubrique a la vue listeVideos
        return $this->render('BWFVideosBundle:Videos:listeVideosAdmin.html.twig',
                array('videos' => $rsVideos));
    }
}
