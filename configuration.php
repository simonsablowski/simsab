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

date_default_timezone_set('Europe/Berlin');
$configuration['currentYear'] = date('Y');

$configuration['trackingCode'] = "\t\t<script type=\"text/javascript\">\n\t\t<!--\n\t\tvar gaJsHost = 'https:' == document.location.protocol ? 'https://ssl.' : 'http://www.';\n\t\tdocument.write(unescape('%3Cscript src=\"' + gaJsHost + 'google-analytics.com/ga.js\" type=\"text/javascript\"%3E%3C/script%3E'));\n\t\t//-->\n\t\t</script>\n\t\t<script type=\"text/javascript\">\n\t\t<!--\n\t\ttry {\n\t\t\tvar pageTracker = _gat._getTracker('UA-9712670-1');\n\t\t\tpageTracker._initData();\n\t\t\tpageTracker._trackPageview();\n\t\t} catch (error) {\n\t\t\t\n\t\t}\n\t\t//-->\n\t\t</script>";
$configuration['pathSeparator'] = '#';
$configuration['debugMode'] = FALSE;