<?php

$configuration = array();

$configuration['pathApplication'] = dirname(__FILE__) . '/';

$configuration['basePath'] = '/';

$configuration['includeDirectories'] = array(
	$configuration['pathApplication'],
	$configuration['pathApplication'] . '../nacho/'
);

$configuration['Localization'] = array(
	'default' => 'de',
	'de' => array(
		'language' => 'de',
		'locale' => 'de_DE',
		'name' => 'Deutsch'
	),
	'en' => array(
		'language' => 'en',
		'locale' => 'en_GB',
		'name' => 'English'
	)
);

$configuration['Request'] = array(
	'defaultQuery' => 'Static/show/index',
	'aliasQueries' => array()
);

// $configuration['debugMode'] = TRUE;
$configuration['debugMode'] = FALSE;