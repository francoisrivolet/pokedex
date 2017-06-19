<?php

/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 21:51
 */
namespace PokedexBundle\Entity;
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
     * @ORM\Column(type="integer", name="id_pokemon")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(unique=true,type="string", name="numero")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", name="nom_fr")
     *
     * @var string
     */
    private $nom;

    /**
     * @ORM\Column(type="string", name="nom_en")
     *
     * @var string
     */
    private $nomEn;

    /**
     * @ORM\Column(type="float", name="poids")
     *
     * @var float
     */
    private $poids;

    /**
     * @ORM\Column(type="float", name="taille")
     *
     * @var float
     */
    private $taille;

    /**
     * @ORM\Column(type="integer", name="attaque")
     *
     * @var integer
     */
    private $attaque;

    /**
     * @ORM\Column(type="integer", name="defense")
     *
     * @var integer
     */
    private $defense;

    /**
     * @ORM\Column(type="integer", name="attaque_spe")
     *
     * @var integer
     */
    private $attaqueSpe;

    /**
     * @ORM\Column(type="integer", name="defense_spe")
     *
     * @var integer
     */
    private $defenseSpe;

    /**
     * @ORM\Column(type="integer", name="vitesse")
     *
     * @var integer
     */
    private $vitesse;

    /**
     * @ORM\Column(type="text", name="description")
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="integer", name="nb_pas_eclosion")
     *
     * @var integer
     */
    private $nbPasEclosion;

    /**
     * @ORM\Column(type="string", name="img_generale")
     *
     * @var string
     */
    private $imgGenerale;

    /**
     * @ORM\Column(type="string", name="img_miniature")
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
     * @ORM\JoinColumn(name="type2", referencedColumnName="id_type")
     *
     * @var Type
     */
    private $type2;

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
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
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
    public function getImgGenerale()
    {
        return $this->imgGenerale;
    }

    /**
     * @param string $imgGenerale
     */
    public function setImgGenerale($imgGenerale)
    {
        $this->imgGenerale = $imgGenerale;
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
}
