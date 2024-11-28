<?php

declare(strict_types=1);

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppWebTestCase extends WebTestCase
{
    protected function generateUrl(string $route, array $parameters = []): string
    {
        $container = self::getContainer();
        /** @var \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator */
        $urlGenerator = $container->get('router');
        return $urlGenerator->generate($route, $parameters);
    }
}
