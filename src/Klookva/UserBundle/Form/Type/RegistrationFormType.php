<?php
// src/Klookva/UserBundle/Form/Type/RegistrationFormType.php
namespace Klookva\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name');
        $builder->add('surname');
        $builder->add('phone');
        $builder->add('photo','file');
        $builder->add('groups', 'entity', array(
            'class' => 'KlookvaUserBundle:KlGroup',
            'property' => 'name',
            'multiple' => true,
        ));
    }

    public function getName()
    {
        return 'klookva_user_registration';
    } 
   
}