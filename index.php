<?php 

require './vendor/autoload.php';

use Sunra\PhpSimple\HtmlDomParser;

$data = [];
$url = 'https://greyhoundsform.betfair.com/racingform';

// Acessa a url e captura o HTML
$page = HtmlDomParser::file_get_html($url); 

// Seletor css3
$title = $page->find('.raceSummary h2');

echo $title[0]->nodes[0]->_[4];

