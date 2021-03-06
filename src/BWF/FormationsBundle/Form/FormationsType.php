<?php

namespace BWF\FormationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('nomEn')
            ->add('texte')
            ->add('texteEn')
            ->add('prix')
            ->add('participantmax')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('categorie')
            ->add('participants')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BWF\FormationsBundle\Entity\Formations'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bwf_formationsbundle_formations';
    }
}
