<?php

require 'Articles_Parser.php';
require 'CSV_Articles_Parser.php';
require 'TXT_Articles_Parser.php';
require 'Helper.php';

$current_directory = dirname(__FILE__) . DIRECTORY_SEPARATOR;

$csv_articles = new CSV_Articles_Parser();
$csv_articles->file_path =  $current_directory . 'articles.csv';

$txt_articles = new TXT_Articles_Parser();
$txt_articles->file_path =  $current_directory . 'articles.txt';

display_articles($csv_articles);
display_articles($txt_articles);

