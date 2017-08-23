<?php

namespace Freeday\NamecheapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Freeday\NamecheapBundle\DependencyInjection\NamecheapExtension;

class NamecheapBundle extends Bundle
{
    /**
     * @return NamecheapExtension
     */
    public function getContainerExtension(): NamecheapExtension
    {
        return new NamecheapExtension();
    }
}
