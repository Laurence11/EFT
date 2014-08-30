<?php
/**
 * Description of VideosEditType
 *
 * @author macbook
 */
namespace BWF\VideosBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
    
class VideosEditType extends VideosType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
           
           parent::buildForm($builder, $options);

       }
       public function getName(){
           return 'bwf_videosbundle_videosedit';
       }
}

