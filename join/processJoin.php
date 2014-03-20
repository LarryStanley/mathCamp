<?php
	session_start();
	$id = array(
		0=> 'name',
		1=> 'nickname',
	);
	// 檢查欄位是否正確
	$checkColumn = true;
	for ($i = 0; $i < sizeof($id); $i++){
		if (empty($_POST[$id[$i]])){
			$_SESSION['additionClass'][$id[$i]] = "has-error";
			$checkColumn = false;
		}else
			$_SESSION['additionClass'][$id[$i]] = "has-success";
	}
	
	// 若欄位不正確返回 index.php
	// 若欄位正確前往   result.php
	if (!$checkColumn)
		header('Location: index.php');
	else
		echo '成功';
	
?>