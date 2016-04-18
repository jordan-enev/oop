<?php

require 'Articles_Parser.php';
require 'CSV_Articles_Parser.php';
require 'TXT_Articles_Parser.php';
require 'Articles_Collection.php';

$current_dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
$data_dir    = $current_dir . 'data' . DIRECTORY_SEPARATOR;

$csv_articles            = new CSV_Articles_Parser();
$csv_articles->file_path = $data_dir . 'articles.csv';

$txt_articles            = new TXT_Articles_Parser();
$txt_articles->file_path = $data_dir . 'articles.txt';

Articles_Collection::render( $csv_articles );
Articles_Collection::render( $txt_articles );

