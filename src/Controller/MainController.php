<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig');
    }
    /**
     * @Route("/Dashboard", name="app_dash")
     */
    public function Dashboard()
    {
        return $this->render('dashboard/index.html.twig');
    }
    /**
     * @Route("/profile", name="app_profile")
     */
    public function Profile()
    {
        return $this->render('profile/index.html.twig');
    }
    /**
     * @Route("/client", name="app_cl")
     */
    public function Client()
    {
        return $this->render('client/index.html.twig');
    }
    /**
     * @Route("/generateprices", name="generate_prices")
     */
    public function Generate()
    {
        return $this->render('generate_prices/index.html.twig');
    }
    /**
     * @Route("/orbitearea", name="orbite")
     */
    public function Orbit()
    {
        return $this->render('orbite_area/index.html.twig');
    }
}
