<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
        ->add('categorie', ChoiceType::class, [
            'attr' => ['class' => 'form-control'],
            'label_attr' => ['class' => 'fw-bold'],
            'label' => 'Catégorie',
            'choices' => [
                'Club' => 'club_golf',
                'Tenue vestimentaire' => 'tenue_vestimentaire',
                'Accessoire' => 'accessoire',
                'Sac' => 'sac',
                'Chariot' => 'chariot',
                'Balle' => 'balle',
            ],
        ])
        ->add('description',TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
        ->add('prix', NumberType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold']])
        ->add('image', FileType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=> 'fw-bold'],
            'label' => 'Image',
            'mapped' => false,
            'required' => false,
            'data_class' => null,
            'constraints' => [
                new File([
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Le site accepte uniquement les fichiers PNG et JPG',
                    ])
                ],
        ])
        ->add('envoyer', SubmitType::class, ['attr' => ['class'=> 'btn bg-primary text-white m-4' ], 'row_attr' => ['class' => 'text-center'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}