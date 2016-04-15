<?php

/**
 * Class Articles_Collection
 */
class Articles_Collection {

	/**
	 * Render articles by provided article parser
	 *
	 * @param Articles_Parser $parser
	 */
	public static function render( Articles_Parser $parser ) {
		$parser->parse();
		$articles = $parser->get_all();

		foreach ( $articles as $article ) {
			var_dump($article);
		}
	}

}