<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'verbb/navigation' => 
  array (
    'class' => 'verbb\\navigation\\Navigation',
    'basePath' => $vendorDir . '/verbb/navigation/src',
    'handle' => 'navigation',
    'aliases' => 
    array (
      '@verbb/navigation' => $vendorDir . '/verbb/navigation/src',
    ),
    'name' => 'Navigation',
    'version' => '1.4.33',
    'description' => 'A Craft CMS plugin to create navigation menus for your site.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/navigation',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/navigation/craft-3/CHANGELOG.md',
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.10.12',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.5.2',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'hybridinteractive/craft-contact-form-extensions' => 
  array (
    'class' => 'hybridinteractive\\contactformextensions\\ContactFormExtensions',
    'basePath' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    'handle' => 'contact-form-extensions',
    'aliases' => 
    array (
      '@hybridinteractive/contactformextensions' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    ),
    'name' => 'Contact Form Extensions',
    'version' => '1.3.2',
    'schemaVersion' => '1.0.1',
    'description' => 'Adds extensions to the Craft CMS contact form plugin.',
    'developer' => 'Hybrid Interactive',
    'developerUrl' => 'https://hybridinteractive.io',
    'documentationUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/README.md',
    'changelogUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'contactFormExtensionsService' => 'hybridinteractive\\contactformextensions\\services\\ContactFormExtensionsService',
    ),
  ),
  'nystudio107/craft-vite' => 
  array (
    'class' => 'nystudio107\\vite\\Vite',
    'basePath' => $vendorDir . '/nystudio107/craft-vite/src',
    'handle' => 'vite',
    'aliases' => 
    array (
      '@nystudio107/vite' => $vendorDir . '/nystudio107/craft-vite/src',
    ),
    'name' => 'Vite',
    'version' => '1.0.31',
    'description' => 'Allows the use of the Vite.js next generation frontend tooling with Craft CMS',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/vite/',
    'changelogUrl' => 'https://raw.githubusercontent.com/nystudio107/craft-vite/v1/CHANGELOG.md',
  ),
  'sebastianlenz/linkfield' => 
  array (
    'class' => 'typedlinkfield\\Plugin',
    'basePath' => $vendorDir . '/sebastianlenz/linkfield/src',
    'handle' => 'typedlinkfield',
    'aliases' => 
    array (
      '@typedlinkfield' => $vendorDir . '/sebastianlenz/linkfield/src',
    ),
    'name' => 'Typed link field',
    'version' => '1.0.25',
    'description' => 'A Craft field type for selecting links',
    'developer' => 'Sebastian Lenz',
    'developerUrl' => 'https://github.com/sebastian-lenz/',
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '3.7.3',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'pennebaker/craft-architect' => 
  array (
    'class' => 'pennebaker\\architect\\Architect',
    'basePath' => $vendorDir . '/pennebaker/craft-architect/src',
    'handle' => 'architect',
    'aliases' => 
    array (
      '@pennebaker/architect' => $vendorDir . '/pennebaker/craft-architect/src',
    ),
    'name' => 'Architect',
    'version' => '2.4.3',
    'schemaVersion' => '2.0.0',
    'description' => 'CraftCMS plugin to generate content models from JSON/YAML data.',
    'developer' => 'Pennebaker',
    'developerUrl' => 'https://pennebaker.com',
    'documentationUrl' => 'https://github.com/Pennebaker/craft-architect/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Pennebaker/craft-architect/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => true,
    'components' => 
    array (
      'architectService' => 'pennebaker\\architect\\services\\ArchitectService',
    ),
  ),
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
    'version' => '2.8.6.1',
    'description' => 'Create a JSON API for your elements in Craft',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/element-api/blob/v2/README.md',
  ),
);
