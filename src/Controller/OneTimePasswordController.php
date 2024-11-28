<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/register', name:'register-')]
class OneTimePasswordController extends AbstractController
{
    #[Route('/send-otp', name:'send-otp', methods:'POST')]
    public function send(): JsonResponse
    {
        return $this->json(['send code']);
    }

    #[Route('/verify-otp', name:'verify-otp', methods:'POST')]
    public function verify(): JsonResponse
    {
        return $this->json(['verify code']);
    }
}
