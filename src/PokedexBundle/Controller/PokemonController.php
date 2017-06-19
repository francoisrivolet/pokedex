<?php
/**
 * Created by PhpStorm.
 * User: Fanfan2
 * Date: 19/06/2017
 * Time: 20:34
 */

namespace PokedexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;



class PokemonController extends Controller
{
    /**
     * @Route("/", name="pokemon_index)
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('PokedexBundle:pokemon:index.html.twig');
    }
}