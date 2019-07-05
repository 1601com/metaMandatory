<?php

if (\Config::get('metaMandatoryDevMode') === null || !\Config::get('metaMandatoryDevMode')) {
    $GLOBALS['TL_DCA']['tl_content']['fields']['alt']['eval']['mandatory'] = true;
    $GLOBALS['TL_DCA']['tl_content']['fields']['imageTitle']['eval']['mandatory'] = true;
}
