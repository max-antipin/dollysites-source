<?php

namespace App\Service\OtpSender;

interface OtpSenderInterface
{
    public function validate(string $uid): bool;
    public function send(): void;
}
