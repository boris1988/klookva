<?php

namespace Klookva\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KlookvaUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
