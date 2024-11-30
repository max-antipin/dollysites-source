<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/register', name:'register-')]
class OneTimePasswordController extends AbstractController
{
    #[Route('/send-otp', name:'send-otp', methods:'POST', format: 'json')]
    public function send(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $email = $request->request->getString('uid');
        $emailConstraint = new Assert\Email();
        // all constraint "options" can be set this way
        // $emailConstraint->message = 'Invalid email address';
        $errors = $validator->validate(
            $email,
            [new Assert\NotBlank(), $emailConstraint]
        );
        if ($errors->count()) {
            $errorMessage = $errors[0]->getMessage();
            return $this->json(['message' => $errorMessage], 422);
        }
        return $this->json(['send code']);
    }

    #[Route('/verify-otp', name:'verify-otp', methods:'POST', format: 'json')]
    public function verify(): JsonResponse
    {
        return $this->json(['verify code']);
    }
}
