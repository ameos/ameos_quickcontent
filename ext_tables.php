<?php
if (!defined('TYPO3_MODE')) { die ('Access denied.'); }

// Skins
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY] = [
    'name' => $EXTKEY,
    'stylesheetDirectories' => [
        'sprites' => 'EXT:' . $_EXTKEY . '/stylesheets/sprites/',
        'css' => 'EXT:' . $_EXTKEY . '/Resources/Public/Css/'
    ]
];


// Hooks
if (TYPO3_MODE == 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Hooks/PageRenderer.php:Ameos\\AmeosQuickcontent\\Hooks\\PageRenderer->addJSCSS';
}
