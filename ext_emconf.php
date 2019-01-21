<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "advancedtitle".
 *
 * Auto generated 22-09-2017 13:37
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Advanced Page Title',
  'description' => 'Adds page title prefix and suffix to SEO tab.',
  'category' => 'fe',
  'version' => '0.2.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Tanel Põld',
  'author_email' => 'tanel@brightside.ee',
  'author_company' => 'Brightside OÜ / t3brightside.com',
  'constraints' => [
    'depends' => [
      'typo3' => '9.5.0-9.5.99',
      'seo' => '9.5.0-9.5.99',
    ],
    'conflicts' => [
    ],
  ],
);
