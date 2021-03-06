<?php

/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 21:52
 */

namespace PokedexBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Attaque
 *
 * @ORM\Table(name="attaque")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\AttaqueRepository")
 *
 * @UniqueEntity("numero")
 *
 */

class Attaque
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_attaque")
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
     * @ORM\Column(type="integer", name="puissance")
     *
     * @var integer
     */
    private $puissance;

    /**
     * @ORM\Column(type="integer", name="precision_attaque", nullable=true)
     *
     * @var integer
     */
    private $precision;

    /**
     * @ORM\Column(type="integer", name="pp", nullable=true)
     *
     * @var integer
     */
    private $pp;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumn(name="type",referencedColumnName="id_type", nullable=true)
     * @var Type
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="CategorieAttaque")
     * @ORM\JoinColumn(name="categorie",referencedColumnName="id_categorie_attaque", nullable=true)
     * @var CategorieAttaque
     */
    private $categorie;

    /**
     * @ORM\Column(type="text", name="description", nullable=true)
     *
     * @var string
     */
    private $description;

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
     * @return int
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param int $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * @param int $precision
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
    }

    /**
     * @return int
     */
    public function getPp()
    {
        return $this->pp;
    }

    /**
     * @param int $pp
     */
    public function setPp($pp)
    {
        $this->pp = $pp;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return CategorieAttaque
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param CategorieAttaque $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
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

    public function __toString() {
        return $this->getNom();
    }

}
