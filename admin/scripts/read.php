<?php 

function getAll($tbl){
	include('connect.php');
	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}
