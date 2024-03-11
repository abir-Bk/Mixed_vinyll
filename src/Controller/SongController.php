<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger): Response
    {

        $songs = [
            1 => ['name' => 'this is the life', 'url' => '/audio/Amy Macdonald - This Is The Life (song Lyrics).mp3'],
            2 => ['name' => 'A sky full of stars', 'url' => '/audio/Coldplay - A Sky Full Of Stars (Lyrics).mp3'],
            3 => ['name' => 'Pepas', 'url' => '/audio/Farruko - Pepas (LetraLyrics).mp3'],
            4 => ['name' => 'I Cant Get You Out Of My Head', 'url' => '/audio/Glimmer of Blooms - I Cant Get You Out Of My Head (LYRICS).mp3'],
            5 => ['name' => 'In Da Getto', 'url' => '/audio/J. Balvin, Skrillex - In Da Getto (Letra-Lyrics).mp3'],
            6 => ['name' => 'Bella Ciao', 'url' => '/audio/La Casa De Papel - Bella Ciao [Lyrics] (Money Heist).mp3'],
            7 => ['name' => 'Talk Dirty  Worth It ', 'url' => '/audio/Talk Dirty  Worth It  New Thang  Problem (Adrian John Mashup).mp3'],

        ];


        return $this->json($songs[$id]);
    }
}
