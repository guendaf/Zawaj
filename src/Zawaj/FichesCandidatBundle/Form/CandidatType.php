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
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('dateNaissance', 'date')
            ->add('adresse', 'textarea')
            ->add('telephone', 'text')
            ->add('profession', 'text')
            ->add('etatFiche', 'text')
            ->add('situationPro', 'checkbox')
            ->add('estEtudiant', 'checkbox')
            ->add('estNeeEnFrance', 'checkbox')
            ->add('dateArriveeFrance', 'date')
            ->add('dateArriveeToulouse', 'date')
            ->add('estCelibataire', 'checkbox')
            ->add('dejaMarie', 'checkbox')
            ->add('dejaMarieCivilement', 'checkbox')
            ->add('divorce', 'checkbox')
            ->add('dateDivorce', 'date')
            ->add('taille', 'integer')
            ->add('poids', 'integer')
            ->add('priereQuotidienne', 'checkbox')
            ->add('dateDebutPriere', 'date')
            ->add('frequentationMosquee', 'checkbox')
            ->add('estReconvertit', 'checkbox')
            ->add('dateReconvertion', 'date')
            ->add('hijra', 'checkbox')
            ->add('fumeur', 'checkbox')
            ->add('arreterFumer', 'checkbox')
            ->add('consoStup', 'checkbox')
            ->add('consoAlcool', 'checkbox')
            ->add('exigencesPhysique', 'checkbox')
            ->add('tempsLibre', 'textarea')
            ->add('autreLangue', 'textarea')
            ->add('attenteMariage', 'textarea')
            ->add('presentationPerso', 'textarea')
            ->add('remarques', 'textarea')
            ->add('dateInscription', 'date')
            ->add('rechercheEmploi', 'checkbox')
            ->add('typeHabitation', new TypeHabitationType())
            ->add('referenceReligieuse', new ReferenceReligieuseType())
            ->add('jumuaa', new JumuaaType())
            ->add('apprentissageReligion', 'entity', array(
                'class' => 'ZawajFichesCandidatBundle:ApprentissageReligion',
                'property' => 'name',
                'multiple' => true
            ))
            ->add('priereTrancheHoraire', new PriereTrancheHoraireType())
            ->add('musique', new MusiqueType())
            ->add('television', new TelevisionType())
            ->add('niveauEtude', new NiveauEtudeType())
            ->add('domaineProfession', 'collection', array(
                'type' => new DomaineProfessionType(),
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('domaineEtude', 'collection', array(
                'type' => new DomaineEtudeType(),
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('niveauFrancais', new NiveauFrancaisType())
            ->add('niveauArabe', new NiveauArabeType())
            ->add('polygamie', new PolygamieType())
            ->add('teint', new TeintType())
            ->add('typeMariage', new TypeMariageType())
            ->add('personneRencontree', 'collection', array(
                'type' => new PersonneRencontreeType(),
                'allow_add' => true,
                'allow_delete' => true
            ))
            ->add('cP', new CPType())
            ->add('paysOrigine', new PaysType())
            ->add('paysNationalite', new PaysType())
            ->add('typePapier', new TypePapierType())
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
