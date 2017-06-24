<?php
/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 24/06/2017
 * Time: 02:55
 */

namespace PokedexBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * Type
 *
 * @ORM\Table(name="nom_statistique")
 *
 * @ORM\Entity
 **
 */
class NomStatistique
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", name="id_nom_statistique")
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
}