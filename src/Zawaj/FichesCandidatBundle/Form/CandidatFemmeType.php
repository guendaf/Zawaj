<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatFemmeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voile', 'checkbox')
            ->add('datePortVoile', 'date')
            ->add('souhaitTravaille', 'checkbox')
            ->add('tuteurCourant', 'checkbox')
            ->add('raisonTuteur', 'textarea')
            ->add('commentaireTravail', 'textarea')
            ->add('intentionPortVoile', new IntentionPortVoileType())
            ->add('tuteur', new TuteurType())
            ->add('representantCandidate', 'collection', array(
                'type' => new RepresentantType(),
                'allow_add' => true,
                'allow _delete' => true
            ))
            ->add('profilRechercheHomme', 'collection', array(
                'type' => new ProfilRechercheHommeType(),
                'allow_add' => true,
                'allow_delete' => true
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\CandidatFemme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_candidatfemme';
    }
}
