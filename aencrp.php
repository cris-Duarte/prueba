<?php
//GENERAR LAS LLAVES
require('kgen.php');

function encrip2($plano)
{
	// Get the public Key of the recipient
	$publicKey = openssl_pkey_get_public('file://public.key');
	$a_key = openssl_pkey_get_details($publicKey);
	//Encryp!!!
	openssl_public_encrypt($plano, $encrypted, $publicKey);
	openssl_free_key($publicKey);
	return $encrypted;
}
function decrip2($men)
{
	// Get the private key details
	$privateKey = openssl_pkey_get_private('file://private.key');
	$a_key = openssl_pkey_get_details($privateKey);
	
	if(!openssl_private_decrypt($men, $decrypted, $privateKey)){
		echo "Error al desencriptar ".urlencode($men)."<br>".openssl_error_string();
	}
	openssl_free_key($privateKey);

	return $decrypted;
}

?>