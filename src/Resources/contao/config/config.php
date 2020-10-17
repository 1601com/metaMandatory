<?php

use Agentur1601com\MetaMandatory\EventListener\MakeMetaFieldsMandatory;
use Agentur1601com\MetaMandatory\EventListener\ReplacePlaceholderInTemplate;
use Agentur1601com\MetaMandatory\EventListener\ReplacePlaceholderOnPage;

$GLOBALS['TL_HOOKS']['generatePage'][] = [ReplacePlaceholderOnPage::class, '__invoke'];
$GLOBALS['TL_HOOKS']['parseTemplate'][] = [ReplacePlaceholderInTemplate::class, '__invoke'];
$GLOBALS['TL_HOOKS']['getAttributesFromDca'][] = [MakeMetaFieldsMandatory::class, '__invoke'];


