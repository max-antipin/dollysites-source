<?php

namespace App\Service;

readonly class OtpGenerator
{
    public function __construct(private OtpCharset $charset, private int $length)
    {
        
    }

    public function __invoke(): string
    {
        return (string)mt_rand(0, 10 ** $this->length);
    }
}
