<?php

$realurlConfigurationLocal = array(
	'rootpage_id' => 1,
	'fixedPostVars' => array(
		'books' => array(
			'GETvar' => 'tx_books_bookdetails[book]',
			'table' => 'tx_books_domain_model_book',
			'pids' => array(3),
		),
	),
	'postVarSets' => array(
		'tags' => array(
			'GETvar' => 'tx_books_booklist[tag]',
			'table' => 'tx_books_domain_model_tag',
			'alias_field' => 'name',
		),
	),
);

?>