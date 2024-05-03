<?php
// Obtener el valor de query_string y pasarlo como parámetro al transformar el XML con la hoja de estilos XSLT
$query_string = $_SERVER['QUERY_STRING'];

// Cargar la hoja de estilos XSLT
$arauak = new DOMDocument();
$arauak->load("../../datuak/xsl/langileak.xslt");

// Cargar el XML de datos
$datuak = new DOMDocument();
$datuak->load("../../datuak/xml/datuak.xml");

// Crear el procesador XSLT
$proc = new XSLTProcessor();

// Importar la hoja de estilos XSLT
$proc->importStylesheet($arauak);

// Establecer el parámetro query_string
$proc->setParameter('', 'query_string', $query_string);

// Obtener el valor de selectedDepartamentua y pasarlo como parámetro
$selectedDepartamentua = substr(strstr($query_string, "departamentuakcheckbox="), strlen("departamentuakcheckbox="));
$proc->setParameter('', 'selectedDepartamentua', $selectedDepartamentua);

// Transformar el XML con la hoja de estilos XSLT y mostrar el resultado
echo $proc->transformToXML($datuak);
?>
