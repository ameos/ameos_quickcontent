<?php
namespace Ameos\AmeosQuickcontent\Hooks;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class PageRenderer implements SingletonInterface
{

    /**
     * wrapper function called by hook (\TYPO3\CMS\Core\Page\PageRenderer->render-preProcess)
     *
     * @param array $parameters : An array of available parameters
     * @param \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer : The parent object that triggered this hook
     *
     * @return void
     */
    public function addJSCSS($parameters, &$pageRenderer)
    {
        if (get_class($GLOBALS['SOBE']) === 'TYPO3\CMS\Backend\Controller\PageLayoutController') {
            $pageRenderer->loadRequireJsModule(ExtensionManagementUtility::extRelPath('ameos_quickcontent')
                . 'Resources/Public/JavaScript/GridElementsDragInWizard.js');
            //$pageRenderer->loadRequireJsModule('TYPO3/CMS/Ameos/AmeosQuickcontent');
        }
    }
}
