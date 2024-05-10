<?php
// Query_string balioa lortzea eta parametro gisa pasatzea XML XSLT estilo-orriarekin eraldatzean
$query_string = $_SERVER['QUERY_STRING'];

// XSLT estilo-orria kargatu
$arauak = new DOMDocument();
$arauak->load("../../datuak/xsl/langileak.xslt");

// Kargatu datuen XML
$datuak = new DOMDocument();
$datuak->load("../../datuak/xml/datuak.xml");

// XSLT prozesadorea sortzea
$proc = new XSLTProcessor();

// Inportatu XSLT estilo-orria
$proc->importStylesheet($arauak);

// Query_string parametroa ezartzea
$proc->setParameter('', 'query_string', $query_string);

// SelectedDepartamentua balioa lortu eta parametro gisa pasatu
$selectedDepartamentua = substr(strstr($query_string, "departamentuakcheckbox="), strlen("departamentuakcheckbox="));
$proc->setParameter('', 'selectedDepartamentua', $selectedDepartamentua);

// XMLa XSLT estilo-orriarekin eraldatu eta emaitza erakutsi
echo $proc->transformToXML($datuak);
?>
