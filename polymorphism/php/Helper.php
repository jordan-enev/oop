<?php

/**
 * Display articles by provided article parser
 *
 * @param Articles_Parser $parser
 */
function display_articles( Articles_Parser $parser ) {
	$parser->parse();
	$articles = $parser->get_all();

	foreach ( $articles as $article ) {
		var_dump($article);
	}
}