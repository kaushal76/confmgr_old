<?php

namespace Kinomitech\ConfmgrBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConfmgrAuthorPaperType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('apPosition')
            //->add('apDateCreated', 'datetime')
            //->add('apDateModified', 'datetime')
            ->add('apAuthor', 'entity', 
                    array('property'=>'authorFirstName',
                        'class'=> 'KinomitechConfmgrBundle:ConfmgrAuthors'))
            ->add('apPaper')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper'
        ));
    }
}
