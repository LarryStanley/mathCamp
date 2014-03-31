<?php
	session_start();
	include('../function.php');
	// 檢查欄位是否正確
	$checkColumn = true;
	for ($i = 0; $i < sizeof($id); $i++){
		if ($id[$i]['required']){
			if (empty($_POST[$id[$i]['id']])){
				$_SESSION['additionClass'][$id[$i]['id']] = "has-error";
				$_SESSION['placeholder'][$id[$i]['id']] = "別忘了填入".$id[$i]['name']."噢!";
				$checkColumn = false;
			}else
				$_SESSION['additionClass'][$id[$i]['id']] = "has-success";
		}
	}
	
	// 檢查email
	if (!eregi("^[_.0-9a-z-]+@([0-9a-z-]+.)+[a-z]{2,3}$",$_POST['email']) && !empty($_POST['email'])){
		$checkColumn = false;
		$_SESSION['additionClass']['email'] = "has-error";
		$_SESSION['additionText']['email'] = "你的Email有點問題喔!稍微檢查一下吧!";
	}
	
	// 檢查身分證字號
	if (!checkSecurityNumber($_POST['securityNumber']) && !empty($_POST['securityNumber'])){
		$checkColumn = false;
		$_SESSION['additionClass']['securityNumber'] = "has-error";
		$_SESSION['additionText']['securityNumber'] = "你的身分證字號有點問題喔!稍微檢查一下吧!";
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