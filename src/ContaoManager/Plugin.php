<?php

/*
 * This file is part of meta-mandatory-bundle.
 *
 * (c) Agentur1601com
 *
 * @license LGPL-3.0-or-later
 */

namespace Agentur1601com\MetaMandatory\ContaoManager;

use Agentur1601com\MetaMandatory\MetaMandatoryBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(MetaMandatoryBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
