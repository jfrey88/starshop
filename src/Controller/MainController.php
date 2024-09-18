<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homePage():response
    {
        return new Response('<strong>Starshop</strong>: your monopoly-busting option fort Starship parts!');
    }
}