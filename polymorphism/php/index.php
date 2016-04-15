<?php

require 'Articles_Parser.php';
require 'CSV_Articles_Parser.php';
require 'TXT_Articles_Parser.php';
require 'Articles_Collection.php';

$current_directory = dirname(__FILE__) . DIRECTORY_SEPARATOR;

$csv_articles = new CSV_Articles_Parser();
$csv_articles->file_path =  $current_directory . 'articles.csv';

$txt_articles = new TXT_Articles_Parser();
$txt_articles->file_path =  $current_directory . 'articles.txt';

Articles_Collection::render($csv_articles);
Articles_Collection::render($txt_articles);

