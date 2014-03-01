<?php
$data ="contenido.xml";
$xml = simplexml_load_file($data);

function titleS(){
global $data, $xml;
foreach ($xml->cabecera as $titulo)
printf ($titulo->titulo);
}

function bodyS(){
global $data, $xml;
foreach ($xml->cuerpo->texto as $texto)
echo $texto->parrafo.'<p>';
}

function footerS(){
global $data, $xml;
foreach ($xml->pie as $titulo)
printf ($titulo->texto);
}


?>