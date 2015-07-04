<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfilRechercheFemmeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nonVoile')
            ->add('etudiante')
            ->add('travaille')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\ProfilRechercheFemme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_profilrecherchefemme';
    }
}
