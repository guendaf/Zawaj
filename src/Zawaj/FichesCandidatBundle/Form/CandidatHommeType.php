<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatHommeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('barbe', 'checkbox')
            ->add('profilRechercheFemme', 'collection', array(
                'type' => new ProfilRechercheFemmeType(),
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('barbeSouhaite', 'checkbox')
            ->add('tailleBarbe', new TailleBarbeType())
            ->add('raserBarbe', 'checkbox')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\CandidatHomme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_candidathomme';
    }
}
