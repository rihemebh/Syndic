<?php

namespace App\Form;

use App\Entity\WorkerSearch;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('cin', IntegerType::class, [
                'required' => false
            ])
            ->add('job' );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => WorkerSearch::class,
            "method"=>'GET',
            'cerf_protection'=> false
        ]);

    }
public function getBlockPrefix()
{
    return '';
}

}
