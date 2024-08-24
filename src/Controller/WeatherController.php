<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    public function highlanderSays(int $threshold): Response
    {
        $randomNumber = random_int(1, 100);
        $forecast = $randomNumber < $threshold ? 'It\'s going to rain' : 'It\'s going to be sunny';

        return $this->render('weather/highlander_says.html.twig', [
            'forecast' => $forecast
        ]);
    }

    public function highlanderSaysGuess(string $guess): Response
    {
        $forecast =  "It\'s going to {$guess}";

        return $this->render('weather/highlander_says.html.twig', [
            'forecast' => $forecast
        ]);
    }
}
