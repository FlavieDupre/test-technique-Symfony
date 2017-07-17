<?php

namespace Flavie\MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlavieMovieBundle:Default:index.html.twig');
    }
}
