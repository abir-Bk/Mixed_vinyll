<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController  extends AbstractController
{
    #[Route("/", name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'this is the life', 'artist' => 'Amy Macdonald'],
            ['song' => 'A sky full of stars', 'artist' => 'Coldplay'],
            ['song' => 'Pepas', 'artist' => 'Pepas'],
            ['song' => 'I Cant Get You Out Of My Head', 'artist' => 'Glimmer of Blooms'],
            ['song' => 'In Da Getto', 'artist' => 'J. Balvin, Skrillex '],
            ['song' => 'Bella Ciao', 'artist' => 'La Casa De Papel'],
            ['song' => 'Talk Dirty  Worth It ', 'artist' => 'Adrian John Mashup '],
        ];

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}
