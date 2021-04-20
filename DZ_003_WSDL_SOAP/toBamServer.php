<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("toBam.wsdl");

function convertB($yourName){
  return  1.96 * $yourName;
}

$server->AddFunction("convertB");
$server->handle();
?>