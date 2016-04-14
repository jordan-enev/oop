<?php

/**
 * Class TXT_Articles_Parser
 *
 * Parse articles by provided TXT source file
 */
class TXT_Articles_Parser implements Articles_Parser {

	/**
	 * @var string - Absolute .txt file path
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
		$file = fopen($this->file_path, "r");

		while( ! feof($file)){
			$line = fgets($file);
			$data = explode('|', $line);

			$this->articles[] = array(
				'name'    => $data[0],
				'url'     => $data[1],
				'content' => $data[2],
			);
		}

		fclose($file);
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