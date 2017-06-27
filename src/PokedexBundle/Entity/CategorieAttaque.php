<?php
/**
 * Created by PhpStorm.
 * User: fanfan
 * Date: 21/06/2017
 * Time: 10:01
 */

namespace PokedexBundle\Entity;
use Doctrine\ORM\Mapping as ORM;



/**
 * Attaque
 *
 * @ORM\Table(name="categorie_attaque")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\CategorieAttaqueRepository")
 *
 */
class CategorieAttaque
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_categorie_attaque")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="nom_fr")
     * @var string
     */
    private $nom;

    /**
     * @ORM\Column(type="string", name="nom_en", nullable=true)
     * @var string
     */
    private $nomEn;

    /**
     * @ORM\Column(type="string", name="icon", nullable=true)
     * @var string
     */
    private $icon;

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
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

}