<?php

namespace Freeday\NamecheapBundle\Services;

use Namecheap\Api\Client;
use Namecheap\Api\Domains\Domains;

class NamecheapService
{
    protected $namecheapClient;
    
    public function __construct(string $apiUser, string $apiKey, bool $sandbox = false)
    {
        $ip = '94.242.224.239';
        $this->namecheapClient = new Client($apiUser, $apiKey, $ip, $sandbox);
    }
    
    public function getClient(): Client
    {
        return $this->namecheapClient;
    }
    
    public function getDomains(): Domains
    {
        return new Domains($this->getClient());
    }
}
