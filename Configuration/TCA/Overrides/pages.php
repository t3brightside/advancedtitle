<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TCA']['pages']['columns']['tx_advancedtitle_prefix']['rootLevel'] = true;
$GLOBALS['TCA']['pages']['columns']['tx_advancedtitle_suffix']['rootLevel'] = true;

$tempColumns = array(
	'tx_advancedtitle_prefix' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xlf:tx_advancedtitle_prefix.title',
		'config'=> [
			'type' => 'input',
			'size' => '30',
		],
	],
	'tx_advancedtitle_sufix' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xlf:tx_advancedtitle_sufix.title',
		'config' => [
			'type' => 'input',
			'size' => '30',
		],
	],
	'tx_advancedtitle_absolute' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xlf:tx_advancedtitle_absolute.title',
		'config' => [
			'type' => 'input',
			'size' => '30',
		],
	],
);

ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_advancedtitle_prefix,tx_advancedtitle_sufix,tx_advancedtitle_absolute',
    '',
    'after:seo_title'
);
