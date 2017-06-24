<?php

namespace PokedexBundle\Controller;

use PokedexBundle\Entity\Nature;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Nature controller.
 *
 * @Route("nature")
 */
class NatureController extends Controller
{
    /**
     * Lists all nature entities.
     *
     * @Route("/", name="nature_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $natures = $em->getRepository('PokedexBundle:Nature')->findAll();

        return $this->render('nature/index.html.twig', array(
            'natures' => $natures,
        ));
    }

    /**
     * Finds and displays a nature entity.
     *
     * @Route("/{id}", name="nature_show")
     * @Method("GET")
     */
    public function showAction(Nature $nature)
    {

        return $this->render('nature/show.html.twig', array(
            'nature' => $nature,
        ));
    }
}
