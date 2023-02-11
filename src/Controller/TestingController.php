<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestingController extends AbstractController
{
    /**
     * @Route("/client", name="app_testing")
     */
    public function index(): Response
    {
        return $this->render('client/baseClient.html.twig');
    }
    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function dashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    /**
     * @Route("/camions", name="app_camions")
     */
    public function camionList(): Response
    {
        return $this->render('admin/camion/camionsList.html.twig');
    }
}
