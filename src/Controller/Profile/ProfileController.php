<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function Profile(): Response
    {
        return $this->render('profile/index.html.twig');
    }

    /**
     * @Route("/profile/edit", name="edit_profile")
     */
    public function editProfile(): Response
    {
        return $this->render('profile/EditProfile.html.twig');
    }
}
