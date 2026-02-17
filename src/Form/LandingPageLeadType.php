<?php

namespace App\Form;

use App\Entity\LandingPageLead;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LandingPageLeadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ["label" => "Nome completo"])
            ->add('email', EmailType::class)
            ->add('phone', null, ["label" => "Numero de telefone", "attr" => ["data-inputmask" => "'mask': '(99) 99999-9999'"]])
            ->add('selectedPlan', HiddenType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LandingPageLead::class,
        ]);
    }
}
