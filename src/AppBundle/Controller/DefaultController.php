<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ]);
        if ($this->getUser() == null) {
            return $this->render('base.html.twig');
        } else {
            $em = $this->getDoctrine()->getManager();

            $contacts = $em->getRepository('AppBundle:Contact')->findAll();

            return $this->render('layout.html.twig', array(
                        'contacts' => $contacts,
            ));
        }
    }

}
