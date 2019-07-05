<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(';{frontend_legend}', ',metaMandatoryDevMode;{frontend_legend}', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_settings']['fields']['metaMandatoryDevMode'] = [
    'label'                   => ['Meta Mandatory Dev Mode', 'Felder wie Titel und Beschreibung der Seite müssen nicht mehr ausgefüllt werden.'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12')
];
