<?php
	session_start();
	include('../function.php');
	// 檢查欄位是否正確
	$checkColumn = true;
	// 儲存資料
	$count = 0;
	for ($i = 0; $i < 5; $i++){
		if (empty($_POST['groupName'.$i]) == false){
			$_SESSION['data']['groupName'.$i] = $_POST['groupName'.$i];
			$count = $count + 1;
		}
	}
	$_SESSION['data']['groupSchool'] = $_POST['school'];
	$_SESSION['data']['groupCity'] = $_POST['city'];
	
	if ($count != '3' || $count != '5'){
		$checkColumn = false;
		$_SESSION['groupAlert'] = '團報人數必須三人或五人喔！！'.$count.$checkColumn;
	}
	
	// 若欄位不正確返回 index.php
	// 若欄位正確前往   result.php
	if ($checkColumn){
		header('Location:result.php');
		$_SESSION['success'] = true;
	}else{
		header('Location:index.php');
	}	
?>