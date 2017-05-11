<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="entry")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $entries = $em->getRepository('AppBundle:Entry')->findAll();

        return $this->render('entry/index.html.twig', array(
            'entries' => $entries,
        ));

    }
}
