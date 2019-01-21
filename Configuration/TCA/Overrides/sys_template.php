<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('advancedtitle', 'Configuration/TypoScript/', 'Advanced Page Title');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
  'advancedtitle',
  'Configuration/TypoScript/News/',
  'Advanced Page Title – News article page'
);
