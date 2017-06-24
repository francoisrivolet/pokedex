<?php

namespace PokedexBundle\Controller;

use PokedexBundle\Entity\Talent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Talent controller.
 *
 * @Route("talent")
 */
class TalentController extends Controller
{
    /**
     * Lists all talent entities.
     *
     * @Route("/", name="talent_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $talents = $em->getRepository('PokedexBundle:Talent')->findAll();

        return $this->render('talent/index.html.twig', array(
            'talents' => $talents,
        ));
    }

    /**
     * Creates a new talent entity.
     *
     * @Route("/new", name="talent_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $talent = new Talent();
        $form = $this->createForm('PokedexBundle\Form\TalentType', $talent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($talent);
            $em->flush();

            return $this->redirectToRoute('talent_show', array('id' => $talent->getId()));
        }

        return $this->render('talent/new.html.twig', array(
            'talent' => $talent,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a talent entity.
     *
     * @Route("/{id}", name="talent_show")
     * @Method("GET")
     */
    public function showAction(Talent $talent)
    {
        $deleteForm = $this->createDeleteForm($talent);

        return $this->render('talent/show.html.twig', array(
            'talent' => $talent,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing talent entity.
     *
     * @Route("/{id}/edit", name="talent_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Talent $talent)
    {
        $deleteForm = $this->createDeleteForm($talent);
        $editForm = $this->createForm('PokedexBundle\Form\TalentType', $talent);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('talent_edit', array('id' => $talent->getId()));
        }

        return $this->render('talent/edit.html.twig', array(
            'talent' => $talent,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a talent entity.
     *
     * @Route("/{id}", name="talent_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Talent $talent)
    {
        $form = $this->createDeleteForm($talent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($talent);
            $em->flush();
        }

        return $this->redirectToRoute('talent_index');
    }

    /**
     * Creates a form to delete a talent entity.
     *
     * @param Talent $talent The talent entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Talent $talent)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('talent_delete', array('id' => $talent->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
