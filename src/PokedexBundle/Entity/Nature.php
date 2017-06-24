<?php
/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 24/06/2017
 * Time: 02:42
 */

namespace PokedexBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Type
 *
 * @ORM\Table(name="nature")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\NatureRepository")
 **
 */
class Nature
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_nature")
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
     * @ORM\ManyToOne(targetEntity="NomStatistique")
     * @ORM\JoinColumn(name="augmente", referencedColumnName="id_nom_statistique", nullable=true)
     *
     * @var NomStatistique
     */
    private $augemente;

    /**
     * @ORM\ManyToOne(targetEntity="NomStatistique")
     * @ORM\JoinColumn(name="diminue", referencedColumnName="id_nom_statistique", nullable=true)
     *
     * @var NomStatistique
     */
    private $diminue;

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
     * @return NomStatistique
     */
    public function getAugemente()
    {
        return $this->augemente;
    }

    /**
     * @param NomStatistique $augemente
     */
    public function setAugemente($augemente)
    {
        $this->augemente = $augemente;
    }

    /**
     * @return NomStatistique
     */
    public function getDiminue()
    {
        return $this->diminue;
    }

    /**
     * @param NomStatistique $diminue
     */
    public function setDiminue($diminue)
    {
        $this->diminue = $diminue;
    }
}