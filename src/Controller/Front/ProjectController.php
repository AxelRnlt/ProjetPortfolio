<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjectRepository;

class ProjectController extends AbstractController
{
    /**
     * @Route("/projets")
     */
    public function projects(ProjectRepository $projectRepository): Response
    {

        return $this->render('front/project.html.twig', [
            'projects' => $projectRepository->findAll(),
        ]);
    }
}