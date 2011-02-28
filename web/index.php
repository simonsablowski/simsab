<?php

error_reporting(E_ALL);

require_once dirname(__FILE__) . '/../configuration.php';
foreach ($configuration['includeDirectories'] as $includeDirectory) {
	if (file_exists($filePath = $includeDirectory . 'Application.php')) break include $filePath;
}

$Application = new Application($configuration, isset($_GET['localization']) ? $_GET['localization'] : NULL);
$Application->run(isset($_GET['query']) ? $_GET['query'] : NULL);