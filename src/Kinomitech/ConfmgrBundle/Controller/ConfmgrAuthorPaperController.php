<?php

namespace Kinomitech\ConfmgrBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper;
use Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorPaperType;

/**
 * ConfmgrAuthorPaper controller.
 *
 * @Route("/authorpaper")
 */
class ConfmgrAuthorPaperController extends Controller
{
    /**
     * Lists all ConfmgrAuthorPaper entities.
     *
     * @Route("/", name="authorpaper_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $confmgrAuthorPapers = $em->getRepository('KinomitechConfmgrBundle:ConfmgrAuthorPaper')->findAll();

        return $this->render('confmgrauthorpaper/index.html.twig', array(
            'confmgrAuthorPapers' => $confmgrAuthorPapers,
        ));
    }

    /**
     * Creates a new ConfmgrAuthorPaper entity.
     *
     * @Route("/new", name="authorpaper_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $confmgrAuthorPaper = new ConfmgrAuthorPaper();
        $form = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorPaperType', $confmgrAuthorPaper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrAuthorPaper);
            $em->flush();

            return $this->redirectToRoute('authorpaper_show', array('id' => $confmgrAuthorPaper->getId()));
        }

        return $this->render('confmgrauthorpaper/new.html.twig', array(
            'confmgrAuthorPaper' => $confmgrAuthorPaper,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ConfmgrAuthorPaper entity.
     *
     * @Route("/{id}", name="authorpaper_show")
     * @Method("GET")
     */
    public function showAction(ConfmgrAuthorPaper $confmgrAuthorPaper)
    {
        $deleteForm = $this->createDeleteForm($confmgrAuthorPaper);

        return $this->render('confmgrauthorpaper/show.html.twig', array(
            'confmgrAuthorPaper' => $confmgrAuthorPaper,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ConfmgrAuthorPaper entity.
     *
     * @Route("/{id}/edit", name="authorpaper_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ConfmgrAuthorPaper $confmgrAuthorPaper)
    {
        $deleteForm = $this->createDeleteForm($confmgrAuthorPaper);
        $editForm = $this->createForm('Kinomitech\ConfmgrBundle\Form\ConfmgrAuthorPaperType', $confmgrAuthorPaper);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($confmgrAuthorPaper);
            $em->flush();

            return $this->redirectToRoute('authorpaper_edit', array('id' => $confmgrAuthorPaper->getId()));
        }

        return $this->render('confmgrauthorpaper/edit.html.twig', array(
            'confmgrAuthorPaper' => $confmgrAuthorPaper,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ConfmgrAuthorPaper entity.
     *
     * @Route("/{id}", name="authorpaper_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ConfmgrAuthorPaper $confmgrAuthorPaper)
    {
        $form = $this->createDeleteForm($confmgrAuthorPaper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($confmgrAuthorPaper);
            $em->flush();
        }

        return $this->redirectToRoute('authorpaper_index');
    }

    /**
     * Creates a form to delete a ConfmgrAuthorPaper entity.
     *
     * @param ConfmgrAuthorPaper $confmgrAuthorPaper The ConfmgrAuthorPaper entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ConfmgrAuthorPaper $confmgrAuthorPaper)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('authorpaper_delete', array('id' => $confmgrAuthorPaper->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
