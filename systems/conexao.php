<?php 
try{
	$pdo = new PDO("mysql:host=localhost;dbname=mysql",'root','');
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo 'Erro: ' . $e->getMessage();
}

?>