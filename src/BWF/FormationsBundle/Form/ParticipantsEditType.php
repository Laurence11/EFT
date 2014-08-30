<?php

/**
 * Description of ParticipantsEditType
 *
 * @author macbook
 */
namespace BWF\FormationsBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParticipantsEditType extends ParticipantsType {
    
    public function buildForm(FormBuilderInterface $builder, array $options){
           
           parent::buildForm($builder, $options);

       }
       public function getName(){
           return 'bwf_formationsbundle_Participantsedit';
       }
}

