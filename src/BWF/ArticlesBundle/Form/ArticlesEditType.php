<?php
/**
 * Description of articlesEditType
 *
 * @author macbook
 */
  namespace BWF\ArticlesBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class articlesEditType extends ArticlesType{
          
    public function buildForm(FormBuilderInterface $builder, array $options){
           
           parent::buildForm($builder, $options);

       }
       public function getName(){
           return 'bwf_articlesbundle_articlesedit';
       }
}

