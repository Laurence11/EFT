<?php
/**
 * Description of FormationsEditType
 *
 * @author macbook
 */
namespace BWF\FormationsBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationsEditType extends FormationsType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
           
           parent::buildForm($builder, $options);

       }
       public function getName(){
           return 'bwf_formationsbundle_formationsedit';
       }
}
