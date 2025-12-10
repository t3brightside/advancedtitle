<?php
$EM_CONF[$_EXTKEY] = array (
  'title' => 'Advanced Page Title',
  'description' => 'Adds page title prefix and suffix to SEO tab.',
  'category' => 'fe',
  'version' => '1.4.0',
  'state' => 'stable',
  'clearcacheonload' => true,
  'author' => 'Tanel Põld',
  'author_email' => 'tanel@brightside.ee',
  'author_company' => 'Brightside OÜ / t3brightside.com',
  'constraints' => [
    'depends' => [
      'typo3' => '12.4.0 - 14.9.99',
      'seo' => '12.4.0 - 14.9.99',
    ],
  ],
);
