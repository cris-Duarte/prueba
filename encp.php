<?php
	//código de encriptación y desencriptación simétrica
	$key = hex2bin('5ae1b8a17bad4da4fdac796f64c16ecd');
	$iv = hex2bin('34857d973953e44afb49ea9d61104d8c');
	//encriptación
	function encript1($plano)
	{
		$data = openssl_encrypt($plano, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);		
		return $data;
	}
	//desencriptación
	function decrypt1($men)
	{
		$output = openssl_decrypt($men, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
		return $output;
	}
?>