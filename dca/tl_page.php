<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @package   OpenGraph3
 * @author    Benny Born <benny.born@numero2.de>
 * @license   LGPL
 * @copyright 2017 numero2 - Agentur für Internetdienstleistungen
 */


\System::loadLanguageFile('opengraph_fields');
\Controller::loadDataContainer('opengraph_fields');


/**
 * Modify palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(
    '{dns_legend'
,   $GLOBALS['TL_DCA']['opengraph_fields']['palettes']['default'].'{dns_legend'
,   $GLOBALS['TL_DCA']['tl_page']['palettes']['root']
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(
    '{protected_legend'
,   $GLOBALS['TL_DCA']['opengraph_fields']['palettes']['default'].'{protected_legend'
,   $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);


/**
 * Modify fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['fields']
,   $GLOBALS['TL_DCA']['opengraph_fields']['fields']
);


/**
 * Add legends
 */
array_walk(
    $GLOBALS['TL_LANG']['opengraph_fields']['legends']
,   function( $translation, $key ) {
        $GLOBALS['TL_LANG']['tl_page'][$key] = $translation;
    }
);
