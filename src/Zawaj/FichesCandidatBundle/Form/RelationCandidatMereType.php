<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelationCandidatMereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeRelationMere')
            ->add('candidat')
            ->add('mere')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\RelationCandidatMere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_relationcandidatmere';
    }
}
