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
 * Pokemon
 *
 * @ORM\Table(name="talent")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\TalentRepository")
 *
 */
class Talent
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_talent")
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
     * @ORM\Column(type="text", name="description", nullable=true)
     *
     * @var string
     */
    private $description;

    /**
     * @ORM\Column(type="string", name="effet_combat", nullable=true)
     *
     * @var string
     */
    private $effetsCombat;

    /**
     * @ORM\Column(type="string", name="effet_terrain", nullable=true)
     *
     * @var string
     */
    private $effetTerrain;

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
     * @return string
     */
    public function getEffetsCombat()
    {
        return $this->effetsCombat;
    }

    /**
     * @param string $effetsCombat
     */
    public function setEffetsCombat($effetsCombat)
    {
        $this->effetsCombat = $effetsCombat;
    }

    /**
     * @return string
     */
    public function getEffetTerrain()
    {
        return $this->effetTerrain;
    }

    /**
     * @param string $effetTerrain
     */
    public function setEffetTerrain($effetTerrain)
    {
        $this->effetTerrain = $effetTerrain;
    }



}
