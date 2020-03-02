<?php

namespace App\Controller\Back;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_back_admin")
     */
    public function menu() {

        return $this->render('back/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    public function adminDashBoard() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Utilisateur essai de se connecter dans le être ROLE_ADMIN');
    }
}
