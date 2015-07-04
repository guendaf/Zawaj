<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Proxies\__CG__\Zawaj\FichesCandidatBundle\Entity\Pays;
use Proxies\__CG__\Zawaj\FichesCandidatBundle\Entity\Ville;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('pratiquant', 'checkbox')
            ->add('paysOriginePere', new PaysType())
            ->add('villeHabitationPere', new VilleType())
            ->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\Pere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_pere';
    }
}
