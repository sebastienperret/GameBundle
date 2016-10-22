<?php

namespace Rpg\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RpgGameBundle:Default:index.html.twig');
    }
}
