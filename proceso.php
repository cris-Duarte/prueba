<?php 
	require('encp.php');
	require('aencrp.php');
	//encriptación simétrica
	if ($_POST['t']==1) {
		echo urlencode(encript1($_POST['p']));
	}
	//encriptación asimétrica
	if ($_POST['t']==2) {
		echo urlencode(encrip2($_POST['p']));
	}
	// encriptación hibrida
	if ($_POST['t']==3) {
		echo urlencode(encript1(encrip2($_POST['p'])));
	}
	//desencriptación simétrica
	if ($_POST['et']==1) {
		echo decrypt1(urldecode($_POST['e']));
	}
	//desencriptación asimétrica

	if ($_POST['et']==2) {
		echo decrip2(urldecode($_POST['e']));
	}
	// desencriptación hibrida

	if ($_POST['et']==3) {
		echo decrip2(decrypt1(urldecode($_POST['e'])));
	}
 ?>