<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'In another way' => 'in_another_way', 
                    'Man (including trans men)' => 'man', 
                    'Non-binary' => 'non_binary', 
                    'Prefer not to say' => 'prefer_not_to_say', 
                    'Woman (including trans women)' => 'woman', 
                ],
            ])
            ->add('ethnicity', ChoiceType::class, [
            'choices'=> [
                'Asian' => 'asian',
                'Black' => 'black',
                'Latino' => 'latino',
                'Middle Eastern or North African' => 'middle_eastern_north_african',
                'Mixed' => 'mixed',
                'Other' => 'other',
                'Prefer not to say' => 'prefer_not_to_say',
                'White' => 'white', 
                ]
            ])
            ->add('degrees', ChoiceType::class, [
            'choices' => [
                'Bachelor' => 'bachelor',
                'High School' => 'high_school',
                'Master' => 'master',
                'Other' => 'other',
                'PhD' => 'phd',
                'Prefer not to say' => 'prefer_not_to_say',
                'Vocational School' => 'vocational_school',
                ]
            ])
            ->add('otherSourcesIncome', ChoiceType::class, [
            'choices' => [
                'Family support' => 'family_support',
                'Freelancing' => 'freelancing',
                'Other' => 'other',
                'Partner support' => 'partner_support',
                'Prefer not to say' => 'prefer_not_to_say',
                'Rental property income' => 'rental_property_income',
                'Social security benefits' => 'social_security_benefits',
                'Survival job' => 'survival_job',
                ]
            ])
            ->add('yearsExperience', TextType::class)
            ->add('jobs', CollectionType:: class, [
                'entry_type'=> JobType::class, 
                'entry_options'=> ['label'=> false], 
                'allow_add'=> true, 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
