<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Controller\OneTimePasswordController;
use App\Tests\AppWebTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(OneTimePasswordController::class)]
class OneTimePasswordControllerTest extends AppWebTestCase
{
    public function testSend(): void
    {
        $client = static::createClient();
        $client->request('POST', $this->generateUrl('register-send-otp'));
        $this->assertResponseIsSuccessful();
        $this->assertResponseFormatSame('json');
    }

    public function testVerify(): void
    {
        $client = static::createClient();
        $client->request('POST', $this->generateUrl('register-verify-otp'));
        $this->assertResponseIsSuccessful();
        $this->assertResponseFormatSame('json');
    }
}
