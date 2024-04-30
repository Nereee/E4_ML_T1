<?php

   $arauak = new DOMDocument();
   $arauak ->load("../../datuak/xsl/langileak.xsl");

   $datuak = new DOMDocument();
   $datuak->load("../../datuak/xml/datuak.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($arauak);

   echo $proc->transformToXML($datuak);

?>


