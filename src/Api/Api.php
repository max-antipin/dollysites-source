<?php

namespace App\Api;

use App\OpenAPI\Api\DefaultApiInterface;

class Api implements DefaultApiInterface
{
    public function getVersion(int &$responseCode, array &$responseHeaders): void
    {
        $responseCode = 200;
        # to-do
    }
}
