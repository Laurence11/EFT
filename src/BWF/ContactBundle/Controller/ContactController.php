<?php

namespace BWF\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BWF\ContactBundle\Entity\Contact;
use BWF\ContactBundle\Form\ContactType;

class ContactController extends Controller
{
    public function contacterAction()
            
    {
        
        $form = $this->createForm(new ContactType());
        $data = $form->getData();
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
        $form->bind($request);

        if ($form->isValid()) {
            
            $message = \Swift_Message::newInstance()
            ->setSubject($data['sujet'])
            ->setFrom($data['email'])
            ->setTo('kei00998@gmail.com')
            ->setBody($data['message']);
            $this->get('mailer')->send($message);

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->render('BWFContactBundle:Contacts:contactSend.html.twig');
        }
    }

        return $this->render('BWFContactBundle:Contacts:contactForm.html.twig', array(
        'form' => $form->createView()
    ));
    }
}
