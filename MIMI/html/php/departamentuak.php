<?php

// XSLT estilo-orria kargatu
$arauak = new DOMDocument();
$arauak ->load("../../datuak/xsl/departamentuak.xslt");

// Kargatu datuen XML
$datuak = new DOMDocument();
$datuak->load("../../datuak/xml/datuak.xml");

// XSLT prozesadorea sortzea
$proc = new XSLTProcessor();

// Inportatu XSLT estilo-orria
$proc->importStylesheet($arauak);

// XMLa XSLT estilo-orriarekin eraldatu eta emaitza erakutsi
echo $proc->transformToXML($datuak);

?>


