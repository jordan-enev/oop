<?php

require 'ArticlesParser.php';
require 'CSVArticlesParser.php';
require 'TXTArticlesParser.php';
require 'ArticlesCollection.php';

$current_dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$data_dir = $current_dir . 'data' . DIRECTORY_SEPARATOR;

$csv_articles = new CSVArticlesParser();
$csv_articles->filePath = $data_dir . 'articles.csv';

$txt_articles = new TXTArticlesParser();
$txt_articles->filePath = $data_dir . 'articles.txt';

ArticlesCollection::render($csv_articles);
ArticlesCollection::render($txt_articles);

