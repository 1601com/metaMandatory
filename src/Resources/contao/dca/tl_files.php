<?php

if (\Config::get('metaMandatoryDevMode') === null || !\Config::get('metaMandatoryDevMode')) {
    if ($_GET['do'] == "files" && $_GET['act'] == "edit" && $_GET['id'] && !is_dir(realpath($_SERVER['DOCUMENT_ROOT']."/../")."/".$_GET['id'])) {
        $GLOBALS['TL_DCA']['tl_files']['fields']['meta']['eval']['metaFields']['title'] .= " required";
        $GLOBALS['TL_DCA']['tl_files']['fields']['meta']['eval']['metaFields']['alt'] .= " required";
    }
}
