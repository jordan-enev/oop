<?php

/**
 * Interface Articles_Parser
 */
interface Articles_Parser {
	/**
	 * Parse articles from a source
	 *
	 * @return void
	 */
	public function parse();

	/**
	 * Get all already parsed articles
	 *
	 * @return array
	 */
	public function get_all();
}