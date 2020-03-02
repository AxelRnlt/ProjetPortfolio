<?php

namespace App\Controller\Back;

//use App\Entity\Skill;
use App\Entity\Project;

use App\Form\Type\ProjectType;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;


//use App\Service\FileUploader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/admin/project")
 */
class ProjectController extends AbstractController
{
    /**
     * @Route("/", name="app_back_admin_project", methods={"GET"})
     */
    public function index(ProjectRepository $projectRepository): Response
    {
        return $this->render('back/project/index.html.twig', [
            'projects' => $projectRepository->findAll(),
        ]);
    }


    //, methods={"GET", "POST"}

    /**
     * @Route("/new", name="app_back_admin_project_new", methods={"GET", "POST"})
     */
    public function newProject(Request $request)
    {

        $project = new Project();

        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->storeImage($form->get('image')->getData(), $project);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirect($this->generateUrl('app_back_admin_project'));
        }

        return $this->render('back/project/new.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_admin_project_print", methods={"GET"})
     */
    public function printProject(Project $project): Response
    {
        return $this->render('back/project/print.html.twig', [
            'project' => $project,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_back_admin_project_edit", methods={"GET","POST"})
     */
    public function editProject(Request $request, Project $project): Response
    {
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->storeImage($form->get('image')->getData(), $project);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_back_admin_project');
        }

        return $this->render('back/project/edit.html.twig', [
            'project' => $project,
            'form' => $form->createView(),
        ]);
    }

    protected function storeImage($imageFile, Project $project)
    {
        if ($imageFile) {

            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
            }

            if (!is_null($project->getImageFilename())) {
                $imagePath = $this->getParameter('images_directory') . '/' . $project->getImageFileName();
                unlink($imagePath);
            }
            $project->setImageFileName($newFilename);
        }
    }

    /**
     * @Route("/{id}/delete", name="app_back_admin_project_delete", methods={"GET"})
     */
    public function deleteProject(Request $request, Project $project): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($project);
        $entityManager->flush();

        return $this->redirectToRoute('app_back_admin_project');
    }

    /**
     * @Route("/{id}/deleteImage/", name="app_back_admin_project_deleteImage", methods={"GET"})
     */
    public function deleteImage(Request $request, Project $project): Response
    {
        $imagePath = $this->getParameter('images_directory') . '/' . $project->getImageFilename();
        unlink($imagePath);

        $project->setImageFilename(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($project);
        $entityManager->flush();


        return $this->redirectToRoute('app_back_admin_project');
    }
}
