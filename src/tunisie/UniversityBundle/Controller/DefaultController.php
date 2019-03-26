<?php

namespace tunisie\UniversityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function affichageAction($prof)
    {
    	$nbrVille=24;
    	$tabAssoc=array(
    					array('id'=>1,'libelle'=>'tunis','emp'=>'nord','NBH'=>4),
    					array('id'=>2,'libelle'=>'sousse','emp'=>'milieu','NBH'=>1.5),
    					array('id'=>3,'libelle'=>'sfax','emp'=>'sud','NBH'=>2.5),

    	);
        return $this->render('tunisieUniversityBundle:Default:affichage.html.twig',array('nv'=>$nbrVille,'ta'=>$tabAssoc,'prof'=>$prof));
        
    }
    
}
