<?php

/*
 * This file is part of meta-mandatory-bundle.
 *
 * (c) Agentur1601com
 *
 * @license LGPL-3.0-or-later
 */

namespace Agentur1601com\MetaMandatory\EventListener;

use Contao\Template;

class ReplacePlaceholderInTemplate
{
    public function __invoke(Template $objTemplate): void
    {
        if ("Contao\ModuleNavigation" === $objTemplate->type) {
            $arrItems = $objTemplate->items;
            foreach ($arrItems as $key => $item) {
                if ('*' === $item['pageTitle'] || 'FooBar' === $item['pageTitle']) {
                    $item['pageTitle'] = $item['title'];
                }
                if ('*' === $item['parentPageTitle'] || 'FooBar' === $item['parentPageTitle']) {
                    $item['parentPageTitle'] = $item['parentTitle'];
                }
                if ('*' === $item['mainPageTitle'] || 'FooBar' === $item['mainPageTitle']) {
                    $item['mainPageTitle'] = $item['mainTitle'];
                }
                if ('*' === $item['rootPageTitle'] || 'FooBar' === $item['rootPageTitle']) {
                    $item['rootPageTitle'] = $item['rootTitle'];
                }
                if ('*' === $item['description'] || 'FooBar' === $item['description']) {
                    $item['description'] = '';
                }

                $arrItems[$key] = $item;
            }
            $objTemplate->items = $arrItems;
        }
    }
}
