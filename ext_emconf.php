<?php
$EM_CONF[$_EXTKEY] = array (
  'title' => 'Advanced Page Title',
  'description' => 'Adds page title prefix and suffix to SEO tab.',
  'category' => 'fe',
  'version' => '0.3.1',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Tanel Põld',
  'author_email' => 'tanel@brightside.ee',
  'author_company' => 'Brightside OÜ / t3brightside.com',
  'constraints' => [
    'depends' => [
      'typo3' => '9.5.0-11.5.99',
      'seo' => '9.5.0-11.5.99',
    ],
  ],
);
