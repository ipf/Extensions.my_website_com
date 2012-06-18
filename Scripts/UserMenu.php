<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$objectManager = t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
$view = $objectManager->create('Tx_Fluid_View_StandaloneView');
$view->setFormat('html');
$view->setTemplatePathAndFilename(t3lib_div::getFileAbsFileName('EXT:my_website_com/Resources/Private/Templates/UserMenu.html'));

$feUser = tslib_eidtools::initFeUser();
$view->assign('user', $feUser->user);

echo $view->render();
?>
