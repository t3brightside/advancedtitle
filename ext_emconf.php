<?php
$EM_CONF[$_EXTKEY] = array (
  'title' => 'Advanced Page Title',
  'description' => 'Adds page title prefix and suffix to SEO tab.',
  'category' => 'fe',
  'version' => '1.2.1',
  'state' => 'stable',
  'clearcacheonload' => true,
  'author' => 'Tanel Põld',
  'author_email' => 'tanel@brightside.ee',
  'author_company' => 'Brightside OÜ / t3brightside.com',
  'constraints' => [
    'depends' => [
      'typo3' => '11.5.0 - 12.9.99',
      'seo' => '11.5.0 - 12.9.99',
    ],
  ],
);
