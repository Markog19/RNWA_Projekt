

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<?php

try{
	ini_set('soap.wsdl_cache_enabled',0);
	ini_set('soap.wsdl_cache_ttl',0);

	if($_POST['conv'] == 'toBam') {
			$endPointWSDL = "http://localhost/DZ_003_WSDL_SOAP/toBam.wsdl";
			$sClient = new SoapClient($endPointWSDL,
							array(
							'cache_wsdl'=>WSDL_CACHE_NONE,
							'trace' => 1)
							);
					$params = $_POST['number'];
		
		$response = $sClient->convertB($params);


		$result =  json_encode($response);
		$result = str_replace(array('"'), '',$result);
		//var_dump($response);
		
		echo "<p>Količina</p>";
		echo '<input type="text" value="' . htmlspecialchars($_POST['number'] . " EUR") . '" disabled/>'."\n";

		echo "<h1>=</h1>";

		echo '<input type="text" value="' . htmlspecialchars($result . " BAM") . '" disabled/>'."\n";
   

		echo "\n\n";

	}
	if($_POST['conv'] == 'toEur'){
	
			$endPointWSDL = "http://localhost/DZ_003_WSDL_SOAP/toEur.wsdl";
  
			$sClient = new SoapClient($endPointWSDL,
							array(
							'cache_wsdl'=>WSDL_CACHE_NONE,
							'trace' => 1)
							);

		$params = $_POST['number'];

		$response = $sClient->convertE($params);
		//print_r($response);


		$result =  json_encode($response);
		$result = str_replace(array('"'), '',$result);
		//var_dump($response);
		
		echo "<p>Količina</p>";
		echo '<input type="text" value="' . htmlspecialchars($_POST['number'] . " BAM") . '" disabled/>'."\n";

		echo "<h1>=</h1>";

		echo '<input type="text" value="' . htmlspecialchars($result . " EUR") . '" disabled/>'."\n";
   

		echo "\n\n";
}
  
} catch(SoapFault $e){
  var_dump($e);
  echo $e;
}


?>

</body>
</html>