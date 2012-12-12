<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\JobeetBundle\Entity\Job;
use Ens\JobeetBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller {

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction() {
        
        /*
          $user = $this->container->get('fos_user.user_manager')
                ->findUserByUsername('hassan');
         
                var_dump($user);  die;*/
        $em = $this->getDoctrine()->getEntityManager();

        //$entities = $em->getRepository('EnsJobeetBundle:Job')->findAll();
        /*
          $entities = $em->getRepository('EnsJobeetBundle:Job')->getActiveJobs();

          return $this->render('EnsJobeetBundle:Job:index.html.twig', array(
          'entities' => $entities
          )); */



        $categories = $em->getRepository('EnsJobeetBundle:Category')->getWithJobs();

        foreach ($categories as $category) {
            $category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId(), $this->container->getParameter('max_jobs_on_homepage')));
            $category->setMoreJobs($em->getRepository('EnsJobeetBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
        }

        return $this->render('EnsJobeetBundle:Job:index.html.twig', array(
                    'categories' => $categories
                ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnsJobeetBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EnsJobeetBundle:Job:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Job entity.
     *
     */
    public function newAction() {
        $entity = new Job();
        $entity->setType('full-time');
        $form = $this->createForm(new JobType(), $entity);

        return $this->render('EnsJobeetBundle:Job:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function createAction() {


        $entity = new Job();
        $request = $this->getRequest();
        $form = $this->createForm(new JobType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ens_job_preview', array(
                                'company' => $entity->getCompanySlug(),
                                'location' => $entity->getLocationSlug(),
                                'token' => $entity->getToken(),
                                'position' => $entity->getPositionSlug()
                            )));
        }

        return $this->render('EnsJobeetBundle:Job:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView()
                ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction($token) {

        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }


        if ($entity->getIsActivated()) {
            throw $this->createNotFoundException('Job is activated and cannot be edited.');
        }

        $editForm = $this->createForm(new JobType(), $entity);
        $deleteForm = $this->createDeleteForm($token);

        return $this->render('EnsJobeetBundle:Job:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Edits an existing Job entity.
     *
     */
    public function updateAction($token) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $editForm = $this->createForm(new JobType(), $entity);
        $deleteForm = $this->createDeleteForm($token);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ens_job_edit', array('token' => $token)));
        }

        return $this->render('EnsJobeetBundle:Job:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    public function previewAction($token) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($entity->getId());
        $publishForm = $this->createPublishForm($entity->getToken());
        $extendForm = $this->createExtendForm($entity->getToken());

        return $this->render('EnsJobeetBundle:Job:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'publish_form' => $publishForm->createView(),
                    'extend_form' => $extendForm->createView(),
                ));
    }

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction($token) {
        $form = $this->createDeleteForm($token);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ens_job'));
    }

    public function extendAction($token) {
        $form = $this->createExtendForm($token);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            if (!$entity->extend()) {
                throw $this->createNotFoundException('Unable to find extend the Job.');
            }

            $em->persist($entity);
            $em->flush();

            $this->get('session')->setFlash('notice', sprintf('Your job validity has been extended until %s.', $entity->getExpiresAt()->format('m/d/Y')));
        }

        return $this->redirect($this->generateUrl('ens_job_preview', array(
                            'company' => $entity->getCompanySlug(),
                            'location' => $entity->getLocationSlug(),
                            'token' => $entity->getToken(),
                            'position' => $entity->getPositionSlug()
                        )));
    }

    private function createDeleteForm($token) {
        return $this->createFormBuilder(array('token' => $token))
                        ->add('token', 'hidden')
                        ->getForm()
        ;
    }

    private function createExtendForm($token) {
        return $this->createFormBuilder(array('token' => $token))
                        ->add('token', 'hidden')
                        ->getForm()
        ;
    }

}
