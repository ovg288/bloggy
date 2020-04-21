<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApplicationController extends AbstractController
{
    public function index()
    {
        return $this->render('layout.html.twig', []);
    }
}