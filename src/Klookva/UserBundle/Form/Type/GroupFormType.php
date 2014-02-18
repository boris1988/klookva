<?php
namespace Klookva\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GroupFormType extends AbstractType
{
        public function buildForm(FormBuilder $builder, array $options)
        {
            $builder->add('id', 'hidden')
                ->add('name', 'label')    ;        
        }

        public function getName()
        {
            // no_label is a custom widget that renders field_row without the label

            return 'no_label';
        }

        public function getDefaultOptions(array $options){
            return array('data_class' => 'Klookva\UserBundle\Entity\KlGroup');
        }
    }