<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Environmental tController
 *
 * @author Eseyas Abraha
 */
class EnvironmentController extends Controller{
    //put your code here
    /**
     * @Route("/environment")
     */
    public function showAction(){
        
        
        return $this->render('consultancy/environment_page.html.twig');
        
        
        }
}


  