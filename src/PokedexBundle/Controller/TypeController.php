<?php

namespace PokedexBundle\Controller;

use PokedexBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Type controller.
 *
 * @Route("type")
 */
class TypeController extends Controller
{
    /**
     * Lists all type entities.
     *
     * @Route("/", name="type_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $types = $em->getRepository('PokedexBundle:Type')->findAll();

        return $this->render('type/index.html.twig', array(
            'types' => $types,
        ));
    }

    /**
     * Finds and displays a type entity.
     *
     * @Route("/{id}", name="type_show")
     * @Method("GET")
     */
    public function showAction(Type $type)
    {

        return $this->render('type/show.html.twig', array(
            'type' => $type,
        ));
    }
}
