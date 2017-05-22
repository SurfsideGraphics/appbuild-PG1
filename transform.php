<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('http://www.postandcourier.com/search/?t=article&c[]=news,news/local_state_news*&l=3&s=&sd=desc&f=rss&altf=newsletters');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('style.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>

</body>
</html>