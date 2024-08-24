<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController
{
    #[Route('/weather/highlander-says', name: 'weather highlander-says')]
    public function highlanderSays(): Response
    {
        $randomNumber = random_int(1, 100);
        $weather = $randomNumber < 50 ? 'It\'s going to rain' : 'It\'s going to be sunny';

        return new Response(
            "<html><body><h1>{$weather}</h1></body></html>"
        );
    }
}
