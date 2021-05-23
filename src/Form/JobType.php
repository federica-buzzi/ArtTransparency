<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', ChoiceType::class, [
                'choices' => [
                'Austria' => 'austria', 
                'Belgium' => 'belgium', 
                'Cyprus' => 'cyprus', 
                'Estonia' => 'estonia', 
                'Finland' => 'finland',
                'France' => 'france',
                'Germany' => 'germany',
                'Greece' => 'greece',
                'Ireland' => 'ireland',
                'Italy' => 'italy',
                'Latvia' => 'latvia',
                'Lithuania' => 'lithuania',
                'Luxembourg' => 'luxembourg',
                'Malta' => 'malta',
                'the Netherlands' => 'netherlands',
                'Portugal' => 'portugal',
                'Slovakia' => 'slovakia',
                'Slovenia' => 'slovenia',
                'Spain' => 'spain'
                ],
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                'Academic' => 'academic',
                'Accounting' => 'accounting',
                'Administration' => 'administration',
                'Archivist' => 'archivist',
                'Art handler' => 'art_handler',
                'Artist' => 'artist',
                'Assistant Curator' => 'assistant_curator',
                'Assistant Director' => 'assistant_director',
                'Assistant Manager' => 'assistant_manager',
                'Assistant (other)' => 'assistant',
                'Assistant Registrar' => 'assistant_registrar',
                'Communications' => 'communications',
                'Conservator' => 'conservator',
                'Consultancy' => 'consultancy',
                'Coordinator' => 'coordinator',
                'Curator' => 'curator',
                'Designer' => 'designer',
                'Director' => 'director',
                'Editorial' => 'editorial',
                'Education' => 'education',
                'Gallerist' => 'gallerist',
                'Gallery Assistant' => 'gallery_assistant',
                'Intern' => 'intern',
                'Librarian' => 'librarian',
                'Manager' => 'manager',
                'Other' => 'other',
                'Photographer' => 'photographer',
                'Registrar' => 'registrar',
                'Relations' => 'relations',
                'Research' => 'research',
                'Sales' => 'sales',
                'Security' => 'security', 
                'Techer' => 'teacher', 
                'Technical'=> 'technical', 
                'Visitor Experience'=> 'visitor_experience', 
                'Writer'=> 'writer', 
                ]
            ])
            ->add('startingSalary', TextType::class)
            ->add('yearStartingSalary', TextType::class)
            ->add('endingSalary', TextType::class)
            ->add('yearEndingSalary', TextType::class)
            ->add('typeContract', ChoiceType::class, [
                'choices' => [
                 'Hourly'=> 'hourly', 
                 'Permanent' => 'permanent', 
                 'Finite term'=> 'finite_term',
                 'Unpaid'=> 'unpaid', 
                ]
            ])
            ->add('degreesRequired', ChoiceType::class, [
                'choices' => [
                'BA' => 'ba',
                'BA required MA preferred' => 'ba_required_ma_preferred',
                'High School' => 'high_school',
                'MA' => 'ma',
                'MA required PhD preferred' => 'ma_required_phd_preferred',
                'None required BA preferred' => 'none_required_ba_preferred',
                'None required MA preferred' => 'none_required_ma_preferred',
                'BA and experience' => 'ba_experience',
                'MA and experience' => 'ma_experience',
                'PhD' => 'phd',
                ]
            ])
            ->add('yearsExperience', TextType::class)
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
