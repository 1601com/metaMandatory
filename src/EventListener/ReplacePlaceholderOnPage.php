<?php

/*
 * This file is part of meta-mandatory-bundle.
 *
 * (c) Agentur1601com
 *
 * @license LGPL-3.0-or-later
 */

namespace Agentur1601com\MetaMandatory\EventListener;

use Contao\PageModel;
use Contao\LayoutModel;
use Contao\PageRegular;

class ReplacePlaceholderOnPage
{
    public function __invoke(PageModel $objPage, LayoutModel $objLayout, PageRegular $objPageRegular): void
    {
        if ('*' === $objPage->pageTitle || 'FooBar' === $objPage->pageTitle) {
            $objPage->pageTitle = $objPage->title;
        }
        if ('*' === $objPage->mainPageTitle || 'FooBar' === $objPage->mainPageTitle) {
            $objPage->mainPageTitle = $objPage->mainTitle;
        }
        if ('*' === $objPage->parentPageTitle || 'FooBar' === $objPage->parentPageTitle) {
            $objPage->parentPageTitle = $objPage->parentTitle;
        }
        if ('*' === $objPage->rootPageTitle || 'FooBar' === $objPage->rootPageTitle) {
            $objPage->rootPageTitle = $objPage->rootTitle;
        }
        if ('*' === $objPage->description || 'FooBar' === $objPage->description) {
            $objPage->description = '';
        }
    }
}
