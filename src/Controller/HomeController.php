<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/dataviz', name: 'dataviz')]
    public function dataviz(): Response
    {
        return $this->render('home/dataviz.html.twig');
    }

    #[Route('/dataviz/page', name: 'dataviz_page')]
    public function datavizPage(): Response
    {
        return $this->render('home/dataviz_page.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/form', name: 'form')]
    public function userForm(Request $req)
    {
        $user = new User(); 
        $userForm = $this->createForm(UserType::class, $user,['action'=> $this->generateUrl("form"), 'method'=> 'POST']);
        $userForm->handleRequest($req); 
        if($userForm->isSubmitted() && $userForm->isValid()){
            return $this->render ('home/display_data.html.twig', ['user'=> $user]);
        }
        else{
            return $this->render('home/user_form.html.twig', ['userForm'=> $userForm-> createView()]); 
        }
    }




    // public function jobForm(): Response
    // {
    //     $jobForm = $this->createForm(JobType::class);
    //     $vars = ['myJobForm' => $jobForm->createView()];
    //     return $this->render('home/user_form.html.twig', $vars);
    // }

   
}
