<?php
	$filename ="".__DIR__."\bringer.jpg";
	echo $filename;
	if (function_exists('curl_file_create')) { // php 5.5+
		echo "ok";
	  $cFile = curl_file_create($filename);
	} else { // 
		echo "no";
	  $cFile = '@' . realpath($filename);
	}

	$header = array(
		'Content-Type:application/json',
		'X-Client-ID : web',
		'Authorization : O2HeoBVXjCm5i_33lr4h17__htHKpZA_KcKiN8pA3jedINk8FtL4ruFTmgZBzoCe'
	);

	$post = array(
		'tokoid'	=>	'14',
		'attrib'	=>	'foto_ktp',
		'file'		=>	$cFile
	);

	$target_url = "http://malltik.com/malltik_api/toko/submitdokumen";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
	curl_setopt($ch, CURLOPT_URL,$target_url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
	$result = curl_exec($ch);
	curl_close ($ch);

	echo($result);
?>