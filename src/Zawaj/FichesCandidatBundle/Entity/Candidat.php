<?php

namespace Zawaj\FichesCandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Candidat
 *
 * @ORM\Entity()
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({
 *      "candidatHomme"      = "CandidatHomme",
 *      "candidatFemme"   = "CandidatFemme",
 * })
 * @ORM\Entity(repositoryClass="Zawaj\FichesCandidatBundle\Entity\CandidatRepository")
 */
class Candidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="etatFiche", type="string", length=255)
     */
    private $etatFiche;

    /**
     * @var boolean
     *
     * @ORM\Column(name="situationPro", type="boolean")
     */
    private $situationPro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estEtudiant", type="boolean")
     */
    private $estEtudiant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estNeeEnFrance", type="boolean")
     */
    private $estNeeEnFrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArriveeFrance", type="date")
     */
    private $dateArriveeFrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArriveeToulouse", type="date")
     */
    private $dateArriveeToulouse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estCelibataire", type="boolean")
     */
    private $estCelibataire;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dejaMarie", type="boolean")
     */
    private $dejaMarie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dejaMarieCivilement", type="boolean")
     */
    private $dejaMarieCivilement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="divorce", type="boolean")
     */
    private $divorce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDivorce", type="date")
     */
    private $dateDivorce;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="smallint")
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="smallint")
     */
    private $poids;

    /**
     * @var boolean
     *
     * @ORM\Column(name="priereQuotidienne", type="boolean")
     */
    private $priereQuotidienne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutPriere", type="date")
     */
    private $dateDebutPriere;

    /**
     * @var boolean
     *
     * @ORM\Column(name="frequentationMosquee", type="boolean")
     */
    private $frequentationMosquee;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estReconvertit", type="boolean")
     */
    private $estReconvertit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReconvertion", type="date")
     */
    private $dateReconvertion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hijra", type="boolean")
     */
    private $hijra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fumeur", type="boolean")
     */
    private $fumeur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="arreterFumer", type="boolean")
     */
    private $arreterFumer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consoStup", type="boolean")
     */
    private $consoStup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consoAlcool", type="boolean")
     */
    private $consoAlcool;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exigencesPhysique", type="boolean")
     */
    private $exigencesPhysique;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsLibre", type="text")
     */
    private $tempsLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="autreLangue", type="text")
     */
    private $autreLangue;


    /**
     * @var string
     *
     * @ORM\Column(name="attenteMariage", type="text")
     */
    private $attenteMariage;

    /**
     * @var string
     *
     * @ORM\Column(name="presentationPerso", type="text")
     */
    private $presentationPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text")
     */
    private $remarques;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rechercheEmploi", type="boolean")
     */
    private $rechercheEmploi;


    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\TypeHabitation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeHabitation;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\ReferenceReligieuse")
     * @ORM\JoinColumn(nullable=false)
     */
    private $referenceReligieuse;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Jumuaa")
     * @ORM\JoinColumn(nullable=false)
     */
    private $jumuaa;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\ApprentissageReligion", cascade={"persist"})
     */
    private $apprentissageReligion;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\PriereTrancheHoraire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $priereTrancheHoraire;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Musique")
     * @ORM\JoinColumn(nullable=false)
     */
    private $musique;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Television")
     * @ORM\JoinColumn(nullable=false)
     */
    private $television;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\NiveauEtude")
     * @ORM\JoinColumn(nullable=false)
     */
    private $niveauEtude;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\DomaineProfession", cascade={"persist"})
     */
    private $domaineProfession;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\DomaineEtude", cascade={"persist"})
     */
    private $domaineEtude;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\NiveauFrancais")
     * @ORM\JoinColumn(nullable=false)
     */
    private $niveauFrancais;

    /**
    * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\NiveauArabe")
    * @ORM\JoinColumn(nullable=false)
    */
    private $niveauArabe;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Polygamie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $polygamie;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Teint")
     * @ORM\JoinColumn(nullable=false)
     */
    private $teint;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\TypeMariage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeMariage;

    /**
     * @ORM\ManyToMany(targetEntity="Zawaj\FichesCandidatBundle\Entity\PersonneRencontree", cascade={"persist"})
     */
    private $personneRencontree;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\CP")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cP;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paysOrigine;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\Pays")
    * @ORM\JoinColumn(nullable=false)
    */
    private $paysNationalite;

    /**
     * @ORM\ManyToOne(targetEntity="Zawaj\FichesCandidatBundle\Entity\TypePapier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typePapier;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->apprentissageReligion = new ArrayCollection();
        $this->$domaineProfession = new ArrayCollection();
        $this->$domaineEtude = new ArrayCollection();
        $this->$personneRencontree = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Candidat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Candidat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Candidat
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Candidat
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Candidat
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return Candidat
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set situationPro
     *
     * @param boolean $situationPro
     * @return Candidat
     */
    public function setSituationPro($situationPro)
    {
        $this->situationPro = $situationPro;

        return $this;
    }

    /**
     * Get situationPro
     *
     * @return boolean 
     */
    public function getSituationPro()
    {
        return $this->situationPro;
    }

    /**
     * Set estEtudiant
     *
     * @param boolean $estEtudiant
     * @return Candidat
     */
    public function setEstEtudiant($estEtudiant)
    {
        $this->estEtudiant = $estEtudiant;

        return $this;
    }

    /**
     * Get estEtudiant
     *
     * @return boolean 
     */
    public function getEstEtudiant()
    {
        return $this->estEtudiant;
    }

    /**
     * Set estNeeEnFrance
     *
     * @param boolean $estNeeEnFrance
     * @return Candidat
     */
    public function setEstNeeEnFrance($estNeeEnFrance)
    {
        $this->estNeeEnFrance = $estNeeEnFrance;

        return $this;
    }

    /**
     * Get estNeeEnFrance
     *
     * @return boolean 
     */
    public function getEstNeeEnFrance()
    {
        return $this->estNeeEnFrance;
    }

    /**
     * Set dateArriveeFrance
     *
     * @param \DateTime $dateArriveeFrance
     * @return Candidat
     */
    public function setDateArriveeFrance($dateArriveeFrance)
    {
        $this->dateArriveeFrance = $dateArriveeFrance;

        return $this;
    }

    /**
     * Get dateArriveeFrance
     *
     * @return \DateTime 
     */
    public function getDateArriveeFrance()
    {
        return $this->dateArriveeFrance;
    }

    /**
     * Set dateArriveeToulouse
     *
     * @param \DateTime $dateArriveeToulouse
     * @return Candidat
     */
    public function setDateArriveeToulouse($dateArriveeToulouse)
    {
        $this->dateArriveeToulouse = $dateArriveeToulouse;

        return $this;
    }

    /**
     * Get dateArriveeToulouse
     *
     * @return \DateTime 
     */
    public function getDateArriveeToulouse()
    {
        return $this->dateArriveeToulouse;
    }

    /**
     * Set estCelibataire
     *
     * @param boolean $estCelibataire
     * @return Candidat
     */
    public function setEstCelibataire($estCelibataire)
    {
        $this->estCelibataire = $estCelibataire;

        return $this;
    }

    /**
     * Get estCelibataire
     *
     * @return boolean 
     */
    public function getEstCelibataire()
    {
        return $this->estCelibataire;
    }

    /**
     * Set dejaMarie
     *
     * @param boolean $dejaMarie
     * @return Candidat
     */
    public function setDejaMarie($dejaMarie)
    {
        $this->dejaMarie = $dejaMarie;

        return $this;
    }

    /**
     * Get dejaMarie
     *
     * @return boolean 
     */
    public function getDejaMarie()
    {
        return $this->dejaMarie;
    }

    /**
     * Set dejaMarieCivilement
     *
     * @param boolean $dejaMarieCivilement
     * @return Candidat
     */
    public function setDejaMarieCivilement($dejaMarieCivilement)
    {
        $this->dejaMarieCivilement = $dejaMarieCivilement;

        return $this;
    }

    /**
     * Get dejaMarieCivilement
     *
     * @return boolean 
     */
    public function getDejaMarieCivilement()
    {
        return $this->dejaMarieCivilement;
    }

    /**
     * Set divorce
     *
     * @param boolean $divorce
     * @return Candidat
     */
    public function setDivorce($divorce)
    {
        $this->divorce = $divorce;

        return $this;
    }

    /**
     * Get divorce
     *
     * @return boolean 
     */
    public function getDivorce()
    {
        return $this->divorce;
    }

    /**
     * Set dateDivorce
     *
     * @param \DateTime $dateDivorce
     * @return Candidat
     */
    public function setDateDivorce($dateDivorce)
    {
        $this->dateDivorce = $dateDivorce;

        return $this;
    }

    /**
     * Get dateDivorce
     *
     * @return \DateTime 
     */
    public function getDateDivorce()
    {
        return $this->dateDivorce;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Candidat
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return Candidat
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set priereQuotidienne
     *
     * @param boolean $priereQuotidienne
     * @return Candidat
     */
    public function setPriereQuotidienne($priereQuotidienne)
    {
        $this->priereQuotidienne = $priereQuotidienne;

        return $this;
    }

    /**
     * Get priereQuotidienne
     *
     * @return boolean 
     */
    public function getPriereQuotidienne()
    {
        return $this->priereQuotidienne;
    }

    /**
     * Set dateDebutPriere
     *
     * @param \DateTime $dateDebutPriere
     * @return Candidat
     */
    public function setDateDebutPriere($dateDebutPriere)
    {
        $this->dateDebutPriere = $dateDebutPriere;

        return $this;
    }

    /**
     * Get dateDebutPriere
     *
     * @return \DateTime 
     */
    public function getDateDebutPriere()
    {
        return $this->dateDebutPriere;
    }

    /**
     * Set frequentationMosquee
     *
     * @param boolean $frequentationMosquee
     * @return Candidat
     */
    public function setFrequentationMosquee($frequentationMosquee)
    {
        $this->frequentationMosquee = $frequentationMosquee;

        return $this;
    }

    /**
     * Get frequentationMosquee
     *
     * @return boolean 
     */
    public function getFrequentationMosquee()
    {
        return $this->frequentationMosquee;
    }

    /**
     * Set estReconvertit
     *
     * @param boolean $estReconvertit
     * @return Candidat
     */
    public function setEstReconvertit($estReconvertit)
    {
        $this->estReconvertit = $estReconvertit;

        return $this;
    }

    /**
     * Get estReconvertit
     *
     * @return boolean 
     */
    public function getEstReconvertit()
    {
        return $this->estReconvertit;
    }

    /**
     * Set dateReconvertion
     *
     * @param \DateTime $dateReconvertion
     * @return Candidat
     */
    public function setDateReconvertion($dateReconvertion)
    {
        $this->dateReconvertion = $dateReconvertion;

        return $this;
    }

    /**
     * Get dateReconvertion
     *
     * @return \DateTime 
     */
    public function getDateReconvertion()
    {
        return $this->dateReconvertion;
    }

    /**
     * Set hijra
     *
     * @param boolean $hijra
     * @return Candidat
     */
    public function setHijra($hijra)
    {
        $this->hijra = $hijra;

        return $this;
    }

    /**
     * Get hijra
     *
     * @return boolean 
     */
    public function getHijra()
    {
        return $this->hijra;
    }

    /**
     * Set fumeur
     *
     * @param boolean $fumeur
     * @return Candidat
     */
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }

    /**
     * Get fumeur
     *
     * @return boolean 
     */
    public function getFumeur()
    {
        return $this->fumeur;
    }

    /**
     * Set arreterFumer
     *
     * @param boolean $arreterFumer
     * @return Candidat
     */
    public function setArreterFumer($arreterFumer)
    {
        $this->arreterFumer = $arreterFumer;

        return $this;
    }

    /**
     * Get arreterFumer
     *
     * @return boolean 
     */
    public function getArreterFumer()
    {
        return $this->arreterFumer;
    }

    /**
     * Set consoStup
     *
     * @param boolean $consoStup
     * @return Candidat
     */
    public function setConsoStup($consoStup)
    {
        $this->consoStup = $consoStup;

        return $this;
    }

    /**
     * Get consoStup
     *
     * @return boolean 
     */
    public function getConsoStup()
    {
        return $this->consoStup;
    }

    /**
     * Set consoAlcool
     *
     * @param boolean $consoAlcool
     * @return Candidat
     */
    public function setConsoAlcool($consoAlcool)
    {
        $this->consoAlcool = $consoAlcool;

        return $this;
    }

    /**
     * Get consoAlcool
     *
     * @return boolean 
     */
    public function getConsoAlcool()
    {
        return $this->consoAlcool;
    }

    /**
     * Set exigencesPhysique
     *
     * @param boolean $exigencesPhysique
     * @return Candidat
     */
    public function setExigencesPhysique($exigencesPhysique)
    {
        $this->exigencesPhysique = $exigencesPhysique;

        return $this;
    }

    /**
     * Get exigencesPhysique
     *
     * @return boolean 
     */
    public function getExigencesPhysique()
    {
        return $this->exigencesPhysique;
    }

    /**
     * Set tempsLibre
     *
     * @param string $tempsLibre
     * @return Candidat
     */
    public function setTempsLibre($tempsLibre)
    {
        $this->tempsLibre = $tempsLibre;

        return $this;
    }

    /**
     * Get tempsLibre
     *
     * @return string 
     */
    public function getTempsLibre()
    {
        return $this->tempsLibre;
    }

    /**
     * Set attenteMariage
     *
     * @param string $attenteMariage
     * @return Candidat
     */
    public function setAttenteMariage($attenteMariage)
    {
        $this->attenteMariage = $attenteMariage;

        return $this;
    }

    /**
     * Get attenteMariage
     *
     * @return string 
     */
    public function getAttenteMariage()
    {
        return $this->attenteMariage;
    }

    /**
     * Set presentationPerso
     *
     * @param string $presentationPerso
     * @return Candidat
     */
    public function setPresentationPerso($presentationPerso)
    {
        $this->presentationPerso = $presentationPerso;

        return $this;
    }

    /**
     * Get presentationPerso
     *
     * @return string 
     */
    public function getPresentationPerso()
    {
        return $this->presentationPerso;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Candidat
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Candidat
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set rechercheEmploi
     *
     * @param boolean $rechercheEmploi
     * @return Candidat
     */
    public function setRechercheEmploi($rechercheEmploi)
    {
        $this->rechercheEmploi = $rechercheEmploi;

        return $this;
    }

    /**
     * Get rechercheEmploi
     *
     * @return boolean 
     */
    public function getRechercheEmploi()
    {
        return $this->rechercheEmploi;
    }

    /**
     * @return mixed
     */
    public function getTypeHabitation()
    {
        return $this->typeHabitation;
    }

    /**
     * @param mixed $typeHabitation
     */
    public function setTypeHabitation($typeHabitation)
    {
        $this->typeHabitation = $typeHabitation;
    }

    /**
     * @return mixed
     */
    public function getReferenceReligieuse()
    {
        return $this->referenceReligieuse;
    }

    /**
     * @param mixed $referenceReligieuse
     */
    public function setReferenceReligieuse($referenceReligieuse)
    {
        $this->referenceReligieuse = $referenceReligieuse;
    }

    /**
     * @return mixed
     */
    public function getJumuaa()
    {
        return $this->jumuaa;
    }

    /**
     * @param mixed $jumuaa
     */
    public function setJumuaa($jumuaa)
    {
        $this->jumuaa = $jumuaa;
    }

    /**
     * @return string
     */
    public function getEtatFiche()
    {
        return $this->etatFiche;
    }

    /**
     * @param string $etatFiche
     */
    public function setEtatFiche($etatFiche)
    {
        $this->etatFiche = $etatFiche;
    }

    /**
     * @return string
     */
    public function getAutreLangue()
    {
        return $this->autreLangue;
    }

    /**
     * @param string $autreLangue
     */
    public function setAutreLangue($autreLangue)
    {
        $this->autreLangue = $autreLangue;
    }


    /**
     * Add apprentissageReligion
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ApprentissageReligion $apprentissageReligion
     * @return Candidat
     */
    public function addApprentissageReligion(ApprentissageReligion $apprentissageReligion)
    {
        $this->apprentissageReligion[] = $apprentissageReligion;

        return $this;
    }

    /**
     * Remove apprentissageReligion
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\ApprentissageReligion $apprentissageReligion
     */
    public function removeApprentissageReligion(ApprentissageReligion $apprentissageReligion)
    {
        $this->apprentissageReligion->removeElement($apprentissageReligion);
    }

    /**
     * Get apprentissageReligion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getApprentissageReligion()
    {
        return $this->apprentissageReligion;
    }



    /**
     * Set priereTrancheHoraire
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\PriereTrancheHoraire $priereTrancheHoraire
     * @return Candidat
     */
    public function setPriereTrancheHoraire(\Zawaj\FichesCandidatBundle\Entity\PriereTrancheHoraire $priereTrancheHoraire)
    {
        $this->priereTrancheHoraire = $priereTrancheHoraire;

        return $this;
    }

    /**
     * Get priereTrancheHoraire
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\PriereTrancheHoraire 
     */
    public function getPriereTrancheHoraire()
    {
        return $this->priereTrancheHoraire;
    }

    /**
     * Set musique
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Musique $musique
     * @return Candidat
     */
    public function setMusique(\Zawaj\FichesCandidatBundle\Entity\Musique $musique)
    {
        $this->musique = $musique;

        return $this;
    }

    /**
     * Get musique
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Musique 
     */
    public function getMusique()
    {
        return $this->musique;
    }

    /**
     * Set television
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Television $television
     * @return Candidat
     */
    public function setTelevision(\Zawaj\FichesCandidatBundle\Entity\Television $television)
    {
        $this->television = $television;

        return $this;
    }

    /**
     * Get television
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Television 
     */
    public function getTelevision()
    {
        return $this->television;
    }

    /**
     * Set niveauEtude
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\NiveauEtude $niveauEtude
     * @return Candidat
     */
    public function setNiveauEtude(\Zawaj\FichesCandidatBundle\Entity\NiveauEtude $niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\NiveauEtude 
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Add domaineProfession
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\DomaineProfession $domaineProfession
     * @return Candidat
     */
    public function addDomaineProfession($domaineProfession)
    {
        $this->domaineProfession[] = $domaineProfession;

        return $this;
    }

    /**
     * Remove domaineProfession
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\DomaineProfession $domaineProfession
     */
    public function removeDomaineProfession($domaineProfession)
    {
        $this->domaineProfession->removeElement($domaineProfession);
    }

    /**
     * Get domaineProfession
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomaineProfession()
    {
        return $this->domaineProfession;
    }

    /**
     * Add domaineEtude
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\DomaineEtude $domaineEtude
     * @return Candidat
     */
    public function addDomaineEtude(\Zawaj\FichesCandidatBundle\Entity\DomaineEtude $domaineEtude)
    {
        $this->domaineEtude[] = $domaineEtude;

        return $this;
    }

    /**
     * Remove domaineEtude
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\DomaineEtude $domaineEtude
     */
    public function removeDomaineEtude(\Zawaj\FichesCandidatBundle\Entity\DomaineEtude $domaineEtude)
    {
        $this->domaineEtude->removeElement($domaineEtude);
    }

    /**
     * Get domaineEtude
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomaineEtude()
    {
        return $this->domaineEtude;
    }

    /**
     * Set niveauFrancais
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\NiveauFrancais $niveauFrancais
     * @return Candidat
     */
    public function setNiveauFrancais(\Zawaj\FichesCandidatBundle\Entity\NiveauFrancais $niveauFrancais)
    {
        $this->niveauFrancais = $niveauFrancais;

        return $this;
    }

    /**
     * Get niveauFrancais
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\NiveauFrancais 
     */
    public function getNiveauFrancais()
    {
        return $this->niveauFrancais;
    }

    /**
     * Set niveauArabe
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\NiveauArabe $niveauArabe
     * @return Candidat
     */
    public function setNiveauArabe(\Zawaj\FichesCandidatBundle\Entity\NiveauArabe $niveauArabe)
    {
        $this->niveauArabe = $niveauArabe;

        return $this;
    }

    /**
     * Get niveauArabe
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\NiveauArabe 
     */
    public function getNiveauArabe()
    {
        return $this->niveauArabe;
    }

    /**
     * Set polygamie
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Polygamie $polygamie
     * @return Candidat
     */
    public function setPolygamie(\Zawaj\FichesCandidatBundle\Entity\Polygamie $polygamie)
    {
        $this->polygamie = $polygamie;

        return $this;
    }

    /**
     * Get polygamie
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Polygamie 
     */
    public function getPolygamie()
    {
        return $this->polygamie;
    }

    /**
     * Set teint
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Teint $teint
     * @return Candidat
     */
    public function setTeint(\Zawaj\FichesCandidatBundle\Entity\Teint $teint)
    {
        $this->teint = $teint;

        return $this;
    }

    /**
     * Get teint
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Teint 
     */
    public function getTeint()
    {
        return $this->teint;
    }

    /**
     * Set typeMariage
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\TypeMariage $typeMariage
     * @return Candidat
     */
    public function setTypeMariage(\Zawaj\FichesCandidatBundle\Entity\TypeMariage $typeMariage)
    {
        $this->typeMariage = $typeMariage;

        return $this;
    }

    /**
     * Get typeMariage
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\TypeMariage 
     */
    public function getTypeMariage()
    {
        return $this->typeMariage;
    }

    /**
     * Add personneRencontree
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\PersonneRencontree $personneRencontree
     * @return Candidat
     */
    public function addPersonneRencontree(\Zawaj\FichesCandidatBundle\Entity\PersonneRencontree $personneRencontree)
    {
        $this->personneRencontree[] = $personneRencontree;

        return $this;
    }

    /**
     * Remove personneRencontree
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\PersonneRencontree $personneRencontree
     */
    public function removePersonneRencontree(\Zawaj\FichesCandidatBundle\Entity\PersonneRencontree $personneRencontree)
    {
        $this->personneRencontree->removeElement($personneRencontree);
    }

    /**
     * Get personneRencontree
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonneRencontree()
    {
        return $this->personneRencontree;
    }

    /**
     * Set cP
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\CP $cP
     * @return Candidat
     */
    public function setCP(\Zawaj\FichesCandidatBundle\Entity\CP $cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\CP 
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set paysOrigine
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $paysOrigine
     * @return Candidat
     */
    public function setPaysOrigine(\Zawaj\FichesCandidatBundle\Entity\Pays $paysOrigine)
    {
        $this->paysOrigine = $paysOrigine;

        return $this;
    }

    /**
     * Get paysOrigine
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getPaysOrigine()
    {
        return $this->paysOrigine;
    }

    /**
     * Set paysNationalite
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\Pays $paysNationalite
     * @return Candidat
     */
    public function setPaysNationalite(\Zawaj\FichesCandidatBundle\Entity\Pays $paysNationalite)
    {
        $this->paysNationalite = $paysNationalite;

        return $this;
    }

    /**
     * Get paysNationalite
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\Pays 
     */
    public function getPaysNationalite()
    {
        return $this->paysNationalite;
    }

    /**
     * Set typePapier
     *
     * @param \Zawaj\FichesCandidatBundle\Entity\TypePapier $typePapier
     * @return Candidat
     */
    public function setTypePapier(\Zawaj\FichesCandidatBundle\Entity\TypePapier $typePapier)
    {
        $this->typePapier = $typePapier;

        return $this;
    }

    /**
     * Get typePapier
     *
     * @return \Zawaj\FichesCandidatBundle\Entity\TypePapier 
     */
    public function getTypePapier()
    {
        return $this->typePapier;
    }
}
