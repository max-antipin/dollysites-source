<?php

namespace App\Service\OtpSender;

use Symfony\Component\DependencyInjection\Attribute\When;

#[When(env: 'dev')]
class EmailSenderMock extends EmailSender
{
    public function send(): void
    {
        file_put_contents('var/email_sender_mock.log', 'test', FILE_APPEND);
    }
}
