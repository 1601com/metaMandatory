<?php

/*
 * This file is part of meta-mandatory-bundle.
 *
 * (c) Agentur1601com
 *
 * @license LGPL-3.0-or-later
 */

namespace Agentur1601com\MetaMandatory\EventListener;

class MakeMetaFieldsMandatory
{
    /**
     * @param $arrAttributes
     * @param $objDca
     *
     * @return mixed
     */
    public function __invoke($arrAttributes, $objDca)
    {
        return $arrAttributes;
    }
}
