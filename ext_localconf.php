<?php
if (!defined('TYPO3_MODE')) {die ('Access denied.');}

$rootlinefields = &$GLOBALS["TYPO3_CONF_VARS"]["FE"]["addRootLineFields"];
if($rootlinefields != '');
{
    $rootlinefields .= ' , ';
}

$rootlinefields .= 'tx_advancedtitle_prefix,tx_advancedtitle_sufix';

if (TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')){
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('
        advancedtitle.newsIsLoaded = 1
    ');
} else {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('
        advancedtitle.newsIsLoaded = 0
    ');
}
