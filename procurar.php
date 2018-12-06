<?php

	$uf = $_POST['uf'];
	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];

	if($uf != "" && $cidade !="" && $rua != ""){
		header('Location: https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$rua.'/json/');
	}else{
		header('Location: https://viacep.com.br/ws/'.$uf.'/'.$cidade.'/'.$rua.'/json/');
	}

?>