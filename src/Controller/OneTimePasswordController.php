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
        // Generator generates code
        // OTP code/password, TTL, created at
        // Channel ot send (delivery channel): email, phone, telegram bot
        // Storage: Redis, MySQL, Postgres, Mongo
        // User ID
        // от канала зависит алгоритм валидации
        // Invalid uid
        // no such uid
        // password (code) expired
        // invalid password (code)
        // user banned
        // timeout
        // too many tries
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
        if (!email_sent() || no_timeout()) {
            send_email($email);
            return $this->json('success');
        } else {
            return $this->json('can not send code');
        }
    }

    #[Route('/verify-otp', name:'verify-otp', methods:'POST', format: 'json')]
    public function verify(): JsonResponse
    {
        return $this->json(['verify code']);
    }
}
