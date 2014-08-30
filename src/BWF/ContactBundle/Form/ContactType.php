<?php
/**
 * Description of ContactType
 *
 * @author macbook
 */
namespace BWF\ContactBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('email', 'email');
        $builder->add('sujet');
        $builder->add('message', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }

    
}
