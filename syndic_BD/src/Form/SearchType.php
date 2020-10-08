<?php

namespace App\Form;

use App\Entity\Search;
use Doctrine\DBAL\Types\StringType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', StringType::class, [
                'required' => false,
                'label' => 'Nom et Prenom',
                'attr' => [
                    'placeholder' => 'Nom et Prenom :'
                ],
            ])
            ->add('cin', IntegerType::class, [
                'required' => false,
                'label'=> 'Num Cin',
                'attr' => [
                    'placeholder' => 'Cin :'
                ],
            ])
            ->add('job' , IntegerType::class , [
        'required' => false,
        'label'=> 'travail',
        'attr' => [
            'placeholder' => 'travail :'
        ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'get',
            'csrf_protection'=> false,
        ]);
    }
}
