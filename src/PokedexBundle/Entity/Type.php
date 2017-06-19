<?php

/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 21:52
 */

namespace PokedexBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Type
 *
 * @ORM\Table(name="type")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\TypeRepository")
 **
 */
class Type
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_type")
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
     * @ORM\Column(type="string", name="nom_en")
     *
     * @var string
     */
    private $nomEn;

    /**
     * @ORM\Column(type="string", name="couleur")
     *
     * @var string
     */
    private $couleur;

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
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

}
