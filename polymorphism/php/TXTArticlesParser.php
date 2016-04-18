<?php

/**
 * Class TXTArticlesParser
 *
 * Parse articles by provided TXT source file
 */
class TXTArticlesParser implements ArticlesParser
{

    /**
     * @var string - Absolute .txt file path
     */
    public $filePath;

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
        $file = fopen($this->filePath, "r");

        while (!feof($file)) {
            $line = fgets($file);
            $data = explode('|', $line);

            $this->articles[] = array(
                'name' => $data[0],
                'url' => $data[1],
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
    public function getAll()
    {
        return $this->articles;
    }
}