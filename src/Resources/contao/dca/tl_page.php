<?php

if (\Config::get('metaMandatoryDevMode') === null || !\Config::get('metaMandatoryDevMode')) {
    $GLOBALS['TL_DCA']['tl_page']['fields']['pageTitle']['eval']['mandatory'] = true;
    $GLOBALS['TL_DCA']['tl_page']['fields']['description']['eval']['mandatory'] = true;
}
