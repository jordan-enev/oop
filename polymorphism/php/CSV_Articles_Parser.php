<?php

/**
 * Class CSV_Articles_Parser
 *
 * Parse articles by provided CSV source file
 */
class CSV_Articles_Parser implements Articles_Parser {

	/**
	 * @var string - Absolute .csv file path
	 */
	public $file_path;

	/**
	 * @var array - Parsed articles
	 */
	private $articles;

	/**
	 * Parse all articles
	 *
	 * @return void
	 */
	public function parse() {
		$file = file($this->file_path);
		foreach ($file as $line) {
			$data = str_getcsv($line);

			$this->articles[] = array(
				'name'    => $data[0],
				'url'     => $data[1],
				'content' => $data[2],
			);
		}
	}

	/**
	 * Get all parsed articles
	 *
	 * @return array
	 */
	public function get_all() {
		return $this->articles;
	}
}