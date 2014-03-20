<?php
	session_start();
	include('../function.php');
	// 檢查欄位是否正確
	$checkColumn = true;
	for ($i = 0; $i < sizeof($id); $i++){
			if (empty($_POST[$id[$i]['id']])){
				$_SESSION['additionClass'][$id[$i]['id']] = "has-error";
				$checkColumn = false;
			}else
				$_SESSION['additionClass'][$id[$i]['id']] = "has-success";

	}
	
	// 儲存資料
	for ($i = 0; $i < sizeof($id); $i++){
		if ($id[$i]['type'] != 'addition')
			$_SESSION['data'][$id[$i]['id']] = $_POST[$id[$i]['id']];
	}
	
	// 若欄位不正確返回 index.php
	// 若欄位正確前往   result.php
	if (!$checkColumn){
		header('Location: index.php');
	}else{
		$_SESSION['success'] = true;
		header('Location: result.php');
	}	
?>