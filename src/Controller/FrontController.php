<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class FrontController extends AbstractController
{
    /**
     * @var ManagerRegistry
     */
    private $doctrine;

    public function __contruct(ManagerRegistry $doctrine)
    {
        return $this->doctrine = $doctrine;
    }

    public function header()
    {
        return $this->render('front/_header.html.twig');
    }

    /**
     * @Route("/", name="app_home")
    */
    public function home(): Response
    {
        return $this->render('front/home.html.twig');
    }

    /**
     * @Route("a-propos", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('front/about.html.twig');
    }

    public function footer()
    {
        return $this->render('front/_footer.html.twig');
    }
}
