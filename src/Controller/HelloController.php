<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
        return new Response('Olá, Dino!');
    }

    #[Route('/mamiferos')]
    public function mamiferos(): Response
    {
       return new Response('Alô, mamífera!');
    }
    
    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new response('Oi, invertebrados!');
    }

}