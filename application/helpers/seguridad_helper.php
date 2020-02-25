<?php
// encrypt string
function encriptar($string, $key){
	$key = md5($key);
	return base64_encode(base64_encode(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))))));
}

// decrypt string
function desencriptar($string, $key){
	$key = md5($key);
	return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode(base64_decode(base64_decode($string))), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}

function encriptar_id($id){
	return encriptar($id, "ID#Inn365489@#");
}

function desencriptar_id($id){
	return desencriptar($id, "ID#Inn365489@#");	
}

?>