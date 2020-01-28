<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\Type\SkillType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class SkillController extends AbstractController
{
    /**
     * @Route("/admin/skill", name="app_admin_skill")
     */
    public function index(Request $request)
    {
        $skill = new Skill();
        $skill->setName('HTML');
        $skill->setCategory('Langage');
        $skill->setLinkImg('https://www.flaticon.com/free-icon/html-5_174854');

        $form = $this->createForm(SkillType::class, $skill);
        
        return $this->render('skill/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

/* 
->add('name', TextType::class)
            ->add('category', TextType::class)
            ->add('linkImg', TextType::class)
 */
?>


