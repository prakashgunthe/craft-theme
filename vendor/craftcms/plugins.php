<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/element-api' => 
  array (
    'class' => 'craft\\elementapi\\Plugin',
    'basePath' => $vendorDir . '/craftcms/element-api/src',
    'handle' => 'element-api',
    'aliases' => 
    array (
      '@craft/elementapi' => $vendorDir . '/craftcms/element-api/src',
    ),
    'name' => 'Element API',
    'version' => '3.0.1.1',
    'description' => 'Create a JSON API for your elements in Craft',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/element-api/blob/v2/README.md',
  ),
  'craftcms/webhooks' => 
  array (
    'class' => 'craft\\webhooks\\Plugin',
    'basePath' => $vendorDir . '/craftcms/webhooks/src',
    'handle' => 'webhooks',
    'aliases' => 
    array (
      '@craft/webhooks' => $vendorDir . '/craftcms/webhooks/src',
    ),
    'name' => 'Webhooks',
    'version' => '3.0.4',
    'description' => 'Post webhooks when events are triggered in Craft CMS.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/webhooks/blob/master/README.md',
  ),
);
