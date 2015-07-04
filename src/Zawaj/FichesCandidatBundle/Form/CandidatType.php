<?php

namespace Zawaj\FichesCandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('adresse')
            ->add('telephone')
            ->add('profession')
            ->add('etatFiche')
            ->add('situationPro')
            ->add('estEtudiant')
            ->add('estNeeEnFrance')
            ->add('dateArriveeFrance')
            ->add('dateArriveeToulouse')
            ->add('estCelibataire')
            ->add('dejaMarie')
            ->add('dejaMarieCivilement')
            ->add('divorce')
            ->add('dateDivorce')
            ->add('taille')
            ->add('poids')
            ->add('priereQuotidienne')
            ->add('dateDebutPriere')
            ->add('frequentationMosquee')
            ->add('estReconvertit')
            ->add('dateReconvertion')
            ->add('hijra')
            ->add('fumeur')
            ->add('arreterFumer')
            ->add('consoStup')
            ->add('consoAlcool')
            ->add('exigencesPhysique')
            ->add('tempsLibre')
            ->add('autreLangue')
            ->add('attenteMariage')
            ->add('presentationPerso')
            ->add('remarques')
            ->add('dateInscription')
            ->add('rechercheEmploi')
            ->add('typeHabitation')
            ->add('referenceReligieuse')
            ->add('jumuaa')
            ->add('apprentissageReligion')
            ->add('priereTrancheHoraire')
            ->add('musique')
            ->add('television')
            ->add('niveauEtude')
            ->add('domaineProfession')
            ->add('domaineEtude')
            ->add('niveauFrancais')
            ->add('niveauArabe')
            ->add('polygamie')
            ->add('teint')
            ->add('typeMariage')
            ->add('personneRencontree')
            ->add('cP')
            ->add('paysOrigine')
            ->add('paysNationalite')
            ->add('typePapier')

            ->add('apprentissageReligion', 'collection', array(
                'type'         => new ApprentissageReligionType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))

            ->add('domaineProfessionType', 'collection', array(
                'type'         => new DomaineProfessionType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))

            ->add('save',      'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Zawaj\FichesCandidatBundle\Entity\Candidat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zawaj_fichescandidatbundle_candidat';
    }
}
