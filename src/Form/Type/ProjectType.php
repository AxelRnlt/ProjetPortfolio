<?php

namespace App\Form\Type;

use App\Entity\Project;

use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use FOS\CKEditorBundle\Form\Type\CKEditorType;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class ProjectType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du Projet',
            ])
            ->add('description', CKEditorType::class, [
                'label' => 'Description du Projet',
                'required' => false,
                'config' => array(
                    'uiColor' => '#ffffff',
                ),
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de Création du Projet',
                'widget' => 'single_text',
            ])
            
            //->add('sauvegarder', SubmitType::class)
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPG Image',
                    ])
                ],
            ])
            /* ->add('skill', ArrayCollection::class, [
                'label' => 'Compétences',
                'required' => false,
            ]) */
        ;

        $builder->add('skill', EntityType::class, [
            'class' => Skill::class,
            'choice_label' => 'name',
            'expanded' => true,
            'multiple' => true,
        ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
