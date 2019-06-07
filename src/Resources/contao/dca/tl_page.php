<?php

$GLOBALS['TL_DCA']['tl_page']['fields']['pageTitle']['eval']['mandatory'] = true;
$GLOBALS['TL_DCA']['tl_page']['fields']['pageTitle']['save_callback'][] = [
    'metaMandTlPage', 'titleSafeCallback'
];

$GLOBALS['TL_DCA']['tl_page']['fields']['description']['eval']['mandatory'] = true;

class metaMandTlPage extends Backend
{
    public function titleSafeCallback($value, DataContainer $dc)
    {
        $value = trim($value);
        if ((empty($value) || $value === '*' || $value === 'FooBar') && !empty($dc->activeRecord->title))
        {
            $value = $dc->activeRecord->title;
        }
        return $value;
    }
}
