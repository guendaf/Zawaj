<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeMariageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleTypeMariage')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\TypeMariage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_typemariage';
    }
}
