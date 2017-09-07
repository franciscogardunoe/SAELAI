<?php

namespace saelaiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('saelaiBundle:Default:index.html.twig');
    }
}
