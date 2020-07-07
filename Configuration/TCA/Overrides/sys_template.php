<?php
defined('TYPO3_MODE') || die('Access denied.');

/***************
 * TypoScript: Full Package
 * This includes the full setup including all configurations
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'hellotypo3',
    'Configuration/TypoScript',
    'hellotypo3 Distribution Extension'
);