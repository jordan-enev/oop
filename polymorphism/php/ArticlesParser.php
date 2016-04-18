<?php

/**
 * Interface ArticlesParser
 */
interface ArticlesParser
{

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
    public function getAll();
}