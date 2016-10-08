<?php

namespace Kinomitech\ConfmgrBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers;
use Kinomitech\ConfmgrBundle\Form\ConfmgrPapersType;
use Kinomitech\ConfmgrBundle\Entity;

/**
 * ConfmgrPapers controller.
 *
 * @Route("/papers")
 */
class ConfmgrPapersController extends Controller
{
    /**
     * Lists all ConfmgrPapers entities.
     *
     * @Route("/", name="papers_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $confmgrPapers = $em->getRepository('KinomitechConfmgrBundle:ConfmgrPapers')->findAll();

        return $this->render('confmgrpapers/index.html.twig', array(
            'confmgrPapers' => $confmgrPapers,
        ));
    }

    /**
     * Creates a new ConfmgrPapers entity.
     *
     * @Route("/new", name="papers_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $confmgrPaper = new ConfmgrPapers();
        $authors = new Entity\ConfmgrAuthorPaper();
        $form = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrPapersType', $confmgrPaper);
        $form->handleRequest($request);
        $authorData = $form->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrPaper);
            $em->flush();

            return $this->redirectToRoute('papers_show', array('id' => $confmgrPaper->getId()));
        }

        return $this->render('confmgrpapers/new.html.twig', array(
            'confmgrPaper' => $confmgrPaper,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ConfmgrPapers entity.
     *
     * @Route("/{id}", name="papers_show")
     * @Method("GET")
     */
    public function showAction(ConfmgrPapers $confmgrPaper)
    {
        $deleteForm = $this->createDeleteForm($confmgrPaper);

        return $this->render('confmgrpapers/show.html.twig', array(
            'confmgrPaper' => $confmgrPaper,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ConfmgrPapers entity.
     *
     * @Route("/{id}/edit", name="papers_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ConfmgrPapers $confmgrPaper)
    {
        $deleteForm = $this->createDeleteForm($confmgrPaper);
        $editForm = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrPapersType', $confmgrPaper);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrPaper);
            $em->flush();

            return $this->redirectToRoute('papers_edit', array('id' => $confmgrPaper->getId()));
        }

        return $this->render('confmgrpapers/edit.html.twig', array(
            'confmgrPaper' => $confmgrPaper,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ConfmgrPapers entity.
     *
     * @Route("/{id}", name="papers_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ConfmgrPapers $confmgrPaper)
    {
        $form = $this->createDeleteForm($confmgrPaper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($confmgrPaper);
            $em->flush();
        }

        return $this->redirectToRoute('papers_index');
    }

    /**
     * Creates a form to delete a ConfmgrPapers entity.
     *
     * @param ConfmgrPapers $confmgrPaper The ConfmgrPapers entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ConfmgrPapers $confmgrPaper)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('papers_delete', array('id' => $confmgrPaper->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
