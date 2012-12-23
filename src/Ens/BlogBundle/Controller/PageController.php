<?php

namespace Ens\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\BlogBundle\Entity\Contact;
use Ens\BlogBundle\Form\ContactType;

class PageController extends Controller {

    public function indexAction() {
        return $this->render('BlogBundle:Page:index.html.twig');
    }

    public function aboutAction() {
        return $this->render('BlogBundle:Page:about.html.twig');
    }

    public function contactAction() {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {

                $message = \Swift_Message::newInstance()
                        ->setSubject('Contact enquiry from symblog')
                        ->setFrom('enquiries@symblog.co.uk')
                        ->setTo($this->container->getParameter('blog.emails.contact_email'))
                        ->setBody($this->renderView('BlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $contact)));
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('BlogBundle_contact'));
            }
        }

        return $this->render('BlogBundle:Page:contact.html.twig', array(
                    'form' => $form->createView()
                ));
    }

}
