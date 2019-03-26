<?php

namespace Ecole\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcoleEtudiantBundle:Default:index.html.twig');
    }
    public function infoAction()
    {
        return $this->render('EcoleEtudiantBundle:Default:info.html.twig');
    }

}
