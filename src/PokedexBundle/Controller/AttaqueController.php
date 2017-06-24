<?php

namespace PokedexBundle\Controller;

use PokedexBundle\Entity\Attaque;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Attaque controller.
 *
 * @Route("attaque")
 */
class AttaqueController extends Controller
{
    /**
     * Lists all attaque entities.
     *
     * @Route("/", name="attaque_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $attaques = $em->getRepository('PokedexBundle:Attaque')->findAll();

        return $this->render('attaque/index.html.twig', array(
            'attaques' => $attaques,
        ));
    }

    /**
     * Creates a new attaque entity.
     *
     * @Route("/new", name="attaque_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $attaque = new Attaque();
        $form = $this->createForm('PokedexBundle\Form\AttaqueType', $attaque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($attaque);
            $em->flush();

            return $this->redirectToRoute('attaque_show', array('id' => $attaque->getId()));
        }

        return $this->render('attaque/new.html.twig', array(
            'attaque' => $attaque,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a attaque entity.
     *
     * @Route("/{id}", name="attaque_show")
     * @Method("GET")
     */
    public function showAction(Attaque $attaque)
    {
        $deleteForm = $this->createDeleteForm($attaque);

        return $this->render('attaque/show.html.twig', array(
            'attaque' => $attaque,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing attaque entity.
     *
     * @Route("/{id}/edit", name="attaque_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Attaque $attaque)
    {
        $deleteForm = $this->createDeleteForm($attaque);
        $editForm = $this->createForm('PokedexBundle\Form\AttaqueType', $attaque);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('attaque_edit', array('id' => $attaque->getId()));
        }

        return $this->render('attaque/edit.html.twig', array(
            'attaque' => $attaque,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a attaque entity.
     *
     * @Route("/{id}", name="attaque_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Attaque $attaque)
    {
        $form = $this->createDeleteForm($attaque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($attaque);
            $em->flush();
        }

        return $this->redirectToRoute('attaque_index');
    }

    /**
     * Creates a form to delete a attaque entity.
     *
     * @param Attaque $attaque The attaque entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Attaque $attaque)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('attaque_delete', array('id' => $attaque->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
