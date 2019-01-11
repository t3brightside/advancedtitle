<?php
$tempColumns = array(
	'tx_advancedtitle_prefix' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xml:tx_advancedtitle_prefix.title',
		'config'=> [
			'type' => 'input',
			'size' => '30',
		],
	],
	'tx_advancedtitle_sufix' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xml:tx_advancedtitle_sufix.title',
		'config' => [
			'type' => 'input',
			'size' => '30',
		],
	],
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--div--;LLL:EXT:advancedtitle/Resources/Private/Language/locallang_db.xml:tx_advancedtitle.tab;,tx_advancedtitle_prefix,tx_advancedtitle_sufix',
    '1,4,7,3',
    'after:title'
);
