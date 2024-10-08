<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        return $this->render('static/home.html.twig', [
            'page_title' => 'Weather Forecast System Info!',
        ]);
    }
}
