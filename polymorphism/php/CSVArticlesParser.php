<?php

/**
 * Class CSVArticlesParser
 *
 * Parse articles by provided CSV source file
 */
class CSVArticlesParser implements ArticlesParser
{

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
    public function parse()
    {
        $file = file($this->file_path);
        foreach ($file as $line) {
            $data = str_getcsv($line);

            $this->articles[] = array(
                'name' => $data[0],
                'url' => $data[1],
                'content' => $data[2],
            );
        }
    }

    /**
     * Get all parsed articles
     *
     * @return array
     */
    public function getAll()
    {
        return $this->articles;
    }
}