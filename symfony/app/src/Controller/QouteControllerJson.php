<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class QouteControllerJson
{
    #[Route("/api/qoute")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 2);
        $qoutes = ["q1", "q2", "q3"];

        $data = [
            'Qoute' => $qoutes[$number],
        ];

        return new JsonResponse($data);
    }
}