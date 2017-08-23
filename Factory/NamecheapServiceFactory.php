<?php

namespace Freeday\NamecheapBundle\Factory;

use Freeday\NamecheapBundle\Services\NamecheapService;

class NamecheapServiceFactory
{
    /**
     * @param string $apiUser
     * @param string $apiKey
     * @param bool $sandbox
     */
    public function createNamecheapService(string $apiUser, string $apiKey, bool $sandbox): NamecheapService
    {
        return new NamecheapService($apiUser, $apiKey, $sandbox);
    }
}
