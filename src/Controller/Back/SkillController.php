<?php

namespace App\Controller\Back;

use App\Entity\Skill;
use App\Form\Type\SkillType;
use App\Repository\SkillRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin/skill")
 */
class SkillController extends AbstractController
{
    
    /**
    * @Route("/", name="app_back_admin_skill", methods={"GET"})
    */
    public function index(SkillRepository $skillRepository): Response
    {
        return $this->render('back/skill/index.html.twig', [
            'skills' => $skillRepository->findAll(),
        ]);
    }

    /**
     * @Route("/create", name="app_back_admin_skill_create", methods={"GET", "POST"})
     */
    public function newSkill(Request $request): Response {

        $skill = new Skill();

        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($skill);
            $entityManager->flush();

            return $this->redirectToRoute('app_back_admin_skill');
        }
        return $this->render('back/skill/create.html.twig', [
            'skill' => $skill,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_admin_skill_print", methods={"GET"})
     */
    public function printSkill(Skill $skill): Response 
    {
        return $this->render('back/skill/print.html.twig', [
            'skill' => $skill,
        ]);
    }


    /**
     * @Route("/{id}/delete", name="app_back_admin_skill_delete", methods={"GET"})
     */
    public function deleteSkill(Request $request, Skill $skill): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($skill);
        $entityManager->flush();  

        return $this->redirectToRoute('app_back_admin_skill');
    }

    /**
     * @Route("/{id}/edit", name="app_back_admin_skill_edit", methods={"GET","POST"})
     */
    public function editSkill(Request $request, Skill $skill): Response
    {
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_back_admin_skill');
        }

        return $this->render('back/skill/edit.html.twig', [
            'skill' => $skill,
            'form' => $form->createView(),
        ]);
    }  
}
?>

