<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneratePricesController extends AbstractController
{
    /**
     * @Route("/generateprices", name="generate_prices")
     */
    public function index(): Response
    {
        return $this->render('generate_prices/index.html.twig');
    }
}
