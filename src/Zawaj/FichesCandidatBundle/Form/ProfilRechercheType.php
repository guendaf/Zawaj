<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfilRechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ageMin')
            ->add('ageMax')
            ->add('origine')
            ->add('estdivorce')
            ->add('possedeEnfant')
            ->add('nbEnfantMax')
            ->add('ageEnfantMax')
            ->add('fumeur')
            ->add('tailleMin')
            ->add('tailleMax')
            ->add('exigeancePoids')
            ->add('teint')
            ->add('villeHabRecherche')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\ProfilRecherche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_profilrecherche';
    }
}
