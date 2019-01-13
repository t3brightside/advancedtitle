<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        advancedtitle {
            provider = Brightside\Advancedtitle\PageTitle\AdvancedtitlePrefixTitleProvider
            before = seo
        }
    }
'));
