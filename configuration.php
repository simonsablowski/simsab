<?php

$configuration = array();

$configuration['pathApplication'] = dirname(__FILE__) . '/';

$configuration['basePath'] = '/';

$configuration['includeDirectories'] = array(
	$configuration['pathApplication'],
	$configuration['pathApplication'] . '../nacho/'
);

$configuration['Localization'] = array(
	'default' => 'en',
	'en' => array(
		'language' => 'en',
		'locale' => 'en_GB',
		'name' => 'English'
	),
	'de' => array(
		'language' => 'de',
		'locale' => 'de_DE',
		'name' => 'Deutsch'
	)
);

$configuration['Request'] = array(
	'defaultQuery' => 'Static/show/index',
	'aliasQueries' => array()
);

$configuration['trackerCode'] = 'UA-9712670-1';
$configuration['pathSeparator'] = '#';
$configuration['debugMode'] = FALSE;