<?php
$realurlConfigurationLocal = array();
@include('Configuration.local.php');

$defaultFixedPostVar = array(
	'lookUpTable' => array(
		'id_field' => 'uid',
		'alias_field' => 'title',
		'addWhereClause' => ' AND NOT deleted',
		'useUniqueCache' => 1,
		'useUniqueCache_conf' => array(
			'strtolower' => 1,
			'spaceCharacter' => '-',
		),
	),
);

$fixedPostVars = array();
foreach($realurlConfigurationLocal['fixedPostVars'] as $fixedPostVar) {
	foreach($fixedPostVar['pids'] as $pid) {
		$fixedPostVars[$pid] = array($defaultFixedPostVar);
		$fixedPostVars[$pid][0]['GETvar'] = $fixedPostVar['GETvar'];
		$fixedPostVars[$pid][0]['lookUpTable']['table'] = $fixedPostVar['table'];
		if (isset($fixedPostVar['alias_field'])) {
			$fixedPostVars[$pid][0]['lookUpTable']['alias_field'] = $fixedPostVar['alias_field'];
		}
	}
}

$postVarSets = array();
foreach($realurlConfigurationLocal['postVarSets'] as $key => $postVarSet) {
	$postVarSets['_DEFAULT'][$key] = array($defaultFixedPostVar);
	$postVarSets['_DEFAULT'][$key][0]['GETvar'] = $postVarSet['GETvar'];
	$postVarSets['_DEFAULT'][$key][0]['lookUpTable']['table'] = $postVarSet['table'];
	if (isset($postVarSet['alias_field'])) {
		$postVarSets['_DEFAULT'][$key][0]['lookUpTable']['alias_field'] = $postVarSet['alias_field'];
	}
}

$realurlConfiguration = array (
	'init' => array (
		'enableCHashCache' => TRUE,
		'appendMissingSlash' => 'ifNotFile',
		'enableUrlDecodeCache' => TRUE,
		'enableUrlEncodeCache' => TRUE,
		'emptyUrlReturnValue' => '/',
	),
	'pagePath' => array (
		'rootpage_id' => isset($realurlConfigurationLocal['rootpage_id']) ? $realurlConfigurationLocal['rootpage_id'] : 1,
		'type' => 'user',
		'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
		'spaceCharacter' => '-',
		'languageGetVar' => 'L',
		'enableDomainLookup' => 1,
	),
	'defaultToHTMLsuffixOnPrev' => FALSE,
	'acceptHTMLsuffix' => TRUE,
	'preVars' => array(
	),
	'fixedPostVars' => $fixedPostVars,
	'postVarSets' => $postVarSets,
	'fileName' => array(
		'defaultToHTMLsuffixOnPrev' => FALSE,
		'acceptHTMLsuffix' => TRUE,
	)
);

$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = $realurlConfiguration;

unset($fixedPostVars);
unset($realurlConfigurationLocal);
unset($realurlConfiguration);
?>