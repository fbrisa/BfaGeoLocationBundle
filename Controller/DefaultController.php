<?php

namespace Bfa\GeoLocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BfaGeoLocationBundle:Default:index.html.twig');
    }
}
