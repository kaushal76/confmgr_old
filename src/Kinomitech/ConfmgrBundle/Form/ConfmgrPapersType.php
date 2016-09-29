<?php

namespace Kinomitech\ConfmgrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfmgrPapersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paperTitle')
            //->add('paperDateCreated', 'datetime')
            //->add('paperDateModified', 'datetime')
            //->add('paperCreatedBy')
            //->add('paperUpdatedBy')
            ->add('Owner')
            ->add('paperTheme')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers'
        ));
    }
}
