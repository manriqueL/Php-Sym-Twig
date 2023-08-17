<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GuxController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('gux/index.html.twig', [
            'titulo' => 'Lucas Manrique',
        ]);
    }
    public function team(): Response
    {
        return $this->render('gux/team.html.twig', [
            'titulo' => '123123123',
        ]);
    }
}
