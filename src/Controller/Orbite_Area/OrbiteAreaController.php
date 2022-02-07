<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrbiteAreaController extends AbstractController
{
    /**
     * @Route("/orbitearea", name="app_orbite")
     */
    public function index(): Response
    {
        return $this->render('orbite_area/index.html.twig');
    }
}
