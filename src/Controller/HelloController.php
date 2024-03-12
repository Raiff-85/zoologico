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

    #[Route('/moluscos')]
    public function moluscos(): Response
    {
        return new Response('Olá, molusco!');
    }

    #[Route('/insetos')]
    public function insetos(): Response
    {
        return new Response('Alô, insetos!');
    }

    #[Route('/aves')]
    public function aves(): Response
    {
        return new Response('Olá, aves!');
    }

    #[Route('/felinos')]
    public function felinos(): Response
    {
        return new Response('Olá, felinos!');
    }

    #[Route('/caninos')]
    public function caninos(): Response
    {
        return new Response('Oi, cachorro!');
    }
    
}