<?php

namespace Kinomitech\ConfmgrBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthors;
use Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorsType;

/**
 * ConfmgrAuthors controller.
 *
 * @Route("/authors")
 */
class ConfmgrAuthorsController extends Controller
{
    /**
     * Lists all ConfmgrAuthors entities.
     *
     * @Route("/", name="authors_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $confmgrAuthors = $em->getRepository('KinomitechConfmgrBundle:ConfmgrAuthors')->findAll();

        return $this->render('confmgrauthors/index.html.twig', array(
            'confmgrAuthors' => $confmgrAuthors,
        ));
    }

    /**
     * Creates a new ConfmgrAuthors entity.
     *
     * @Route("/new", name="authors_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $confmgrAuthor = new ConfmgrAuthors();
        $form = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorsType', $confmgrAuthor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrAuthor);
            $em->flush();

            return $this->redirectToRoute('authors_show', array('id' => $confmgrAuthor->getId()));
        }

        return $this->render('confmgrauthors/new.html.twig', array(
            'confmgrAuthor' => $confmgrAuthor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ConfmgrAuthors entity.
     *
     * @Route("/{id}", name="authors_show")
     * @Method("GET")
     */
    public function showAction(ConfmgrAuthors $confmgrAuthor)
    {
        $deleteForm = $this->createDeleteForm($confmgrAuthor);

        return $this->render('confmgrauthors/show.html.twig', array(
            'confmgrAuthor' => $confmgrAuthor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ConfmgrAuthors entity.
     *
     * @Route("/{id}/edit", name="authors_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ConfmgrAuthors $confmgrAuthor)
    {
        $deleteForm = $this->createDeleteForm($confmgrAuthor);
        $editForm = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorsType', $confmgrAuthor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrAuthor);
            $em->flush();

            return $this->redirectToRoute('authors_edit', array('id' => $confmgrAuthor->getId()));
        }

        return $this->render('confmgrauthors/edit.html.twig', array(
            'confmgrAuthor' => $confmgrAuthor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ConfmgrAuthors entity.
     *
     * @Route("/{id}", name="authors_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ConfmgrAuthors $confmgrAuthor)
    {
        $form = $this->createDeleteForm($confmgrAuthor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($confmgrAuthor);
            $em->flush();
        }

        return $this->redirectToRoute('authors_index');
    }

    /**
     * Creates a form to delete a ConfmgrAuthors entity.
     *
     * @param ConfmgrAuthors $confmgrAuthor The ConfmgrAuthors entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ConfmgrAuthors $confmgrAuthor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('authors_delete', array('id' => $confmgrAuthor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
