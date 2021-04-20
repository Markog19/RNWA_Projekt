<?php

if(!extension_loaded("soap")){
  dl("php_soap.dll");
}

ini_set("soap.wsdl_cache_enabled","0");

$server = new SoapServer("toEur.wsdl");

function convertE($yourName){
  return 0.51 * $yourName;
}

$server->AddFunction("convertE");
$server->handle();
?>