<?php
	session_start();
	include('../function.php');
	// 檢查欄位是否正確
	$checkColumn = true;
	
	// 儲存資料
	$count = 0;
	for ($i = 0; $i < 5; $i++){
		if ($_POST['groupName'.$i]){
			$_SESSION['data']['groupName'.$i] = $_POST['groupName'.$i];
			$count++;
		}
	}
	$_SESSION['data']['groupSchool'] = $_POST['school'];
	$_SESSION['data']['groupCity'] = $_POST['city'];
	
	if ($count != 3 || $count != 5)
		$checkColumn = false;
	
	// 若欄位不正確返回 index.php
	// 若欄位正確前往   result.php
	if (!$checkColumn){
		header('Location: index.php');
	}else{
		$_SESSION['success'] = true;
		header('Location: result.php');
	}	
?>