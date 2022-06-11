<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function root(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    /**
     * @Route("/home", name="page1")
     */
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/contact", name="page2")
     */
    public function contact(): Response
    {
        return $this->render('portfolio/contact.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/cv", name="page3")
     */
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio", name="page4")
     */
    public function portfolio(): Response
    {
        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
