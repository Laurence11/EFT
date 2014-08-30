<?php
/**
 * Description of ArticleController
 *
 * @author macbook
 */
namespace BWF\ArticlesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BWF\ArticlesBundle\Entity\Articles;
use BWF\ArticlesBundle\Form\ArticlesType;
use BWF\ArticlesBundle\Form\ArticlesEditType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ArticleController extends Controller {
     /**
     * Action afficher : affichage des articles
     * @return vieuw : articles/liste
     */
    public function listeArticlesAction() {
        
        $rsArticles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFArticlesBundle:Articles')
                         ->findBy(array('categorie' => 2));
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('BWFArticlesBundle:Articles:listeArticles.html.twig',
                array('articles' => $rsArticles));
    }
   
     /**
     * Action afficher : affichage de l'article a mettre en vedette sur la page acceuil
     * @return vieuw : articles/articleVedette
     */
    public function articleVedetteAction() {
        
        $rArticle = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFArticlesBundle:Articles')
                         ->findOneBy(array('vedette' => 1));
        
        //je balance cette rubrique a la vue listeBlogs
        return $this->render('BWFArticlesBundle:Articles:articleVedette.html.twig',
                array('article' => $rArticle));
    }
    
     /**
     * Action afficher : affichage des articles pour la partie Admin
     * @return vieuw : articles/liste
     */
    public function listeArticlesAdminAction() {
        
        $rsArticles = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('BWFArticlesBundle:Articles')
                         ->findBy(array('categorie' => 2));
        
        //je balance cette rubrique a la vue listeArticles
        return $this->render('BWFArticlesBundle:Articles:listeArticlesAdmin.html.twig',
                array('articles' => $rsArticles));
    }
    
    public function deleteArticleAction($id) {
        
       $modelManager = $this->getDoctrine()->getManager();
       $rArticle = $modelManager->find('BWFArticlesBundle:Articles',$id);
                      
       if (!$rArticle){
           throw new NotFoundHttpException('Enregistrement non trouvé !');
       }
       
        $modelManager->remove($rArticle);
        $modelManager->flush();
        return $this->redirect($this->generateUrl('bwf_articles_homepage'));
        
    }
    
     /**
     * Action ajouter : ajout de nouvelles formations
     * @return vieuw : Formations/addformation
     */
    
     public function addArticleAction() {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rArticle = new Articles();
        
        $form = $this->createForm(new ArticlesType(),$rArticle);
        
        $requete = $this->getRequest();
        
        // Si c'est POST, on ajoute
                   if ($requete->isMethod('POST')) {
                       // On ajuste les véleurs aux champs
                           $form->bind($requete);
                           $post = $form->getData();

                       // On stocke et on exécute
                           $modelManager->persist($post);
                           $modelManager->flush();
                           
        return $this->redirect($this->generateUrl('bwf_articles_homepage'));
                   }
        return $this->render('BWFArticlesBundle:Articles:addArticle.html.twig',
                                array('form' => $form->createView(),
                                      'articles' => $rArticle));
     
     }
     
      public function editArticleAction($id) {
        
        $modelManager = $this->getDoctrine()->getManager();
        
        $rArticles = $modelManager->getRepository('BWFArticlesBundle:Articles')
                                  ->find($id);
        
        $form = $this->createForm( new ArticlesEditType(),$rArticles);
            
        // je fais un persist/flush
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->bind($request);
            $rArticles = $form->getData();
            
            // On stocke et on exécute
                $modelManager->persist($rArticles);
                $modelManager->flush();
                               
        return $this->redirect($this->generateUrl('bwf_articles_edit'));
        }
        return $this->render('BWFArticlesBundle:Articles:editArticle.html.twig',
                
                                array ('form' => $form->createView(), 'articles' => $rArticles));
        
      }  
}
