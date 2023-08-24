<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GuxController extends AbstractController
{
    public function index($nombre, $numero): Response
    {
        $nombres = array('lucas', 'yesica', 'santiago', 'exequiel', 'carlinho');
        $apellidos = array( 'manrique', 'acuña', 'fernandez', 'velazques');
        $titulo = 'TITULO DE INICIO';
        return $this->render('gux/index.html.twig', [
            'titulo' => $titulo,
            'nombre' => $nombre,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'numero' => $numero
        ]);
    }

    public function team($nombre, $apellido): Response
    {
        $titulo = 'Titulo de Teams';
        return $this->render('gux/team.html.twig', [
            'titulo' => $titulo,
            'nombre' => $nombre,
            'apellido' => $apellido,
        ]);
    }
    public function table($numero): Response {
        return $this->render('gux/table.html.twig',[
            'numero' => $numero
        ]);
    }
    public function redirigir(): Response
    {
        // return $this->redirectToRoute('inicio');
        return $this->redirect('https://www.youtube.com/');
    }


}
