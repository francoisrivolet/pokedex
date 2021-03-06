<?php

/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 21:51
 */
namespace PokedexBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\PokemonRepository")
 *
 * @UniqueEntity("numero")
 *
 */

class Pokemon
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_pokemon", columnDefinition="INTEGER(3) ZEROFILL")
     * @ORM\GeneratedValue()
     */
    private $id;


    /**
     * @ORM\Column(type="string", name="nom_fr")
     *
     * @var string
     */
    private $nom;

    /**
     * @ORM\Column(type="string", name="nom_en", nullable=true)
     *
     * @var string
     */
    private $nomEn;

    /**
     * @ORM\Column(type="float", name="poids", nullable=true)
     *
     * @var float
     */
    private $poids;

    /**
     * @ORM\Column(type="float", name="taille", nullable=true)
     *
     * @var float
     */
    private $taille;

    /**
     * @ORM\Column(type="integer", name="pv", nullable=true)
     *
     * @var integer
     */
    private $pointDeVie;

    /**
     * @ORM\Column(type="integer", name="attaque", nullable=true)
     *
     * @var integer
     */
    private $attaque;

    /**
     * @ORM\Column(type="integer", name="defense", nullable=true)
     *
     * @var integer
     */
    private $defense;

    /**
     * @ORM\Column(type="integer", name="attaque_spe", nullable=true)
     *
     * @var integer
     */
    private $attaqueSpe;

    /**
     * @ORM\Column(type="integer", name="defense_spe", nullable=true)
     *
     * @var integer
     */
    private $defenseSpe;

    /**
     * @ORM\Column(type="integer", name="vitesse", nullable=true)
     *
     * @var integer
     */
    private $vitesse;

    /**
     * @ORM\Column(type="text", name="description", nullable=true)
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="integer", name="nb_pas_eclosion", nullable=true)
     *
     * @var integer
     */
    private $nbPasEclosion;

    /**
     * @ORM\Column(type="integer", name="taux_capture", nullable=true)
     *
     * @var integer
     */
    private $tauxCapture;

    /**
     * @ORM\Column(type="integer", name="bonheur", nullable=true)
     *
     * @var integer
     */
    private $bonheur;

    /**
     * @ORM\Column(type="string", name="img_grande", nullable=true)
     *
     * @var string
     */
    private $imgGrande;

    /**
     * @ORM\Column(type="string", name="img_moyenne", nullable=true)
     *
     * @var string
     */
    private $imgMoyenne;

    /**
     * @ORM\Column(type="string", name="img_miniature", nullable=true)
     *
     * @var string
     */
    private $imgMiniature;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumn(nullable=false, name="type1", referencedColumnName="id_type")
     *
     * @var Type
     */
    private $type1;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumn(name="type2", referencedColumnName="id_type", nullable=true)
     *
     * @var Type
     */
    private $type2;

    /**
     * @ORM\ManyToMany(targetEntity="Talent")
     * @ORM\JoinTable(name="pokemons_talents",
     * joinColumns={@ORM\JoinColumn(name="id_pokemon", referencedColumnName="id_pokemon")},
     * inverseJoinColumns={@ORM\JoinColumn(name="id_talent", referencedColumnName="id_talent")}
     * )
     */
    private $talents;

    /**
     * @ORM\ManyToMany(targetEntity="Attaque")
     * @ORM\JoinTable(name="pokemons_attaques",
     * joinColumns={@ORM\JoinColumn(name="id_pokemon", referencedColumnName="id_pokemon")},
     * inverseJoinColumns={@ORM\JoinColumn(name="id_attaque", referencedColumnName="id_attaque")}
     * )
     */
    private $attaques;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->talents = new ArrayCollection();
        $this->attaques = new ArrayCollection();
    }

    /**
     * Add talent
     *
     * @param \PokedexBundle\Entity\Talent $talent
     *
     * @return Pokemon
     */
    public function addTalent(Talent $talent)
    {
        $this->talents[] = $talent;

        return $this;
    }

    /**
     * Remove talent
     *
     * @param \PokedexBundle\Entity\Talent $talent
     */
    public function removeTalent(Talent $talent)
    {
        $this->talents->removeElement($talent);
    }

    /**
     * Add attaque
     *
     * @param \PokedexBundle\Entity\Attaque $attaque
     *
     * @return Pokemon
     */
    public function addAttaque(Attaque $attaque)
    {
        $this->attaques[] = $attaque;

        return $this;
    }

    /**
     * Remove attaque
     *
     * @param \PokedexBundle\Entity\Attaque $attaque
     */
    public function removeattaque(Attaque $attaque)
    {
        $this->attaques->removeElement($attaque);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * @param string $nomEn
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;
    }

    /**
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param float $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return int
     */
    public function getPointDeVie()
    {
        return $this->pointDeVie;
    }

    /**
     * @param int $pointDeVie
     */
    public function setPointDeVie($pointDeVie)
    {
        $this->pointDeVie = $pointDeVie;
    }

        /**
     * @return int
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * @param int $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

    /**
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param int $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return int
     */
    public function getAttaqueSpe()
    {
        return $this->attaqueSpe;
    }

    /**
     * @param int $attaqueSpe
     */
    public function setAttaqueSpe($attaqueSpe)
    {
        $this->attaqueSpe = $attaqueSpe;
    }

    /**
     * @return int
     */
    public function getDefenseSpe()
    {
        return $this->defenseSpe;
    }

    /**
     * @param int $defenseSpe
     */
    public function setDefenseSpe($defenseSpe)
    {
        $this->defenseSpe = $defenseSpe;
    }

    /**
     * @return int
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getNbPasEclosion()
    {
        return $this->nbPasEclosion;
    }

    /**
     * @param int $nbPasEclosion
     */
    public function setNbPasEclosion($nbPasEclosion)
    {
        $this->nbPasEclosion = $nbPasEclosion;
    }

    /**
     * @return string
     */
    public function getImgGrande()
    {
        return $this->imgGrande;
    }

    /**
     * @param string $imgGrande
     */
    public function setImgGrande($imgGrande)
    {
        $this->imgGrande = $imgGrande;
    }

    /**
     * @return string
     */
    public function getImgMoyenne()
    {
        return $this->imgMoyenne;
    }

    /**
     * @param string $imgMoyenne
     */
    public function setImgMoyenne($imgMoyenne)
    {
        $this->imgMoyenne = $imgMoyenne;
    }


    /**
     * @return string
     */
    public function getImgMiniature()
    {
        return $this->imgMiniature;
    }

    /**
     * @param string $imgMiniature
     */
    public function setImgMiniature($imgMiniature)
    {
        $this->imgMiniature = $imgMiniature;
    }

    /**
     * @return Type
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * @param Type $type1
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;
    }

    /**
     * @return Type
     */
    public function getType2()
    {
        return $this->type2;
    }

    /**
     * @param Type $type2
     */
    public function setType2($type2)
    {
        $this->type2 = $type2;
    }

    /**
     * @return mixed
     */
    public function getTalents()
    {
        return $this->talents;
    }

    /**
     * @param mixed $talents
     */
    public function setTalents($talents)
    {
        $this->talents = $talents;
    }

    /**
     * @return mixed
     */
    public function getAttaques()
    {
        return $this->attaques;
    }

    /**
     * @param mixed $attaques
     */
    public function setAttaques($attaques)
    {
        $this->attaques = $attaques;
    }

    /**
     * @return int
     */
    public function getTauxCapture()
    {
        return $this->tauxCapture;
    }

    /**
     * @param int $tauxCapture
     */
    public function setTauxCapture($tauxCapture)
    {
        $this->tauxCapture = $tauxCapture;
    }

    /**
     * @return int
     */
    public function getBonheur()
    {
        return $this->bonheur;
    }

    /**
     * @param int $bonheur
     */
    public function setBonheur($bonheur)
    {
        $this->bonheur = $bonheur;
    }


}
