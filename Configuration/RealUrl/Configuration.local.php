<?php

// Adjust this file to your needs (rootpage_id should point to the PID of your homepage, books pids contain
// the PIDs of the page(s) that contain the BookDetails plugin!

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