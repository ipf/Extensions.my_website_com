<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// register eID handler for UserMenu
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_mywebsitecom_usermenu'] = 'EXT:' . $_EXTKEY . '/Scripts/UserMenu.php';

	// register RealURL configuration
$realUrlConfigurationFile = t3lib_div::getFileAbsFileName('EXT:' . $_EXTKEY . '/Configuration/RealUrl/Configuration.php');
require_once($realUrlConfigurationFile);
?>