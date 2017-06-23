<?php

/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 21:52
 */
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Pokemon
 *
 * @ORM\Table(name="talent")
 *
 * @ORM\Entity(repositoryClass="PokedexBundle\Repository\PokemonRepository")
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

}
