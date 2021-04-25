<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function form(): Response
    {
        return $this->render('home/form.html.twig');
    }
}
