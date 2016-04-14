<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('indexfrontend.html.twig', array(
            'title' => 'Dorothea Testing',
            'locale' => 'pl',
            'tags' => null,
            'description' => null,
            'author' => null,
        ));
    }
}
