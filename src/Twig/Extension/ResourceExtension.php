<?php

namespace Sherlockode\SyliusFAQPlugin\Twig\Extension;

use Sherlockode\SyliusFAQPlugin\Twig\ResourceRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ResourceExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('sherlockode_faq_has_category', [ResourceRuntime::class, 'hasCategory']),
        ];
    }
}

