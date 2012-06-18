<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// register RealURL configuration
$realUrlConfigurationFile = t3lib_div::getFileAbsFileName('EXT:' . $_EXTKEY . '/Configuration/RealUrl/Configuration.php');
require_once($realUrlConfigurationFile);
?>