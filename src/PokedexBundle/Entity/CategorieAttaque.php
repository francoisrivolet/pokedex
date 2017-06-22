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
     * @ORM\Column(type="string", name="nom_fr"
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

}