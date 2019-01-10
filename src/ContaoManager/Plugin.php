<?php

namespace agentur1601com\metaMandatory\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use agentur1601com\metaMandatory\metaMandatoryBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(metaMandatoryBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
