<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of IndexController
 *
 * @author code
 */
class IndexController extends AbstractController
{

    public function index()
    {
        return $this->render('index.html.twig');
    }
}
