<?php
	session_start();
	include('../function.php');
?>
<html>
<head>
<!-- Default setting -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- css animate  -->
<link rel="stylesheet" href="../animate.css">

<!-- self css -->
<link rel="stylesheet" href="../style.css">
<script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<div class='container joinForm'>
	<h1 align='center'>第15屆暑期中央松數營報名表</h1>
	<form class='form-horizontal' role='form' id='joinForm' action='processJoin.php' method='POST'>
		<p align='center'>放輕鬆，報名松數營很簡單！<br>我們需了解你的一些基本資料</p>
<?php
	if (!$_SESSION['placeholder']){
		for ($i = 0; $i < sizeof($id); $i++) {
			if ($id[$i]['type'] == 'text'){
				$_SESSION['placeholder'][$id[$i]['id']] = $id[$i]['name'];
			}
		}
	}
	// 顯示報名頁面
	// printTextForm($id, $labelName, $value, $additionClass, $placeholder)
	// printRadioForm($id, $radioName, $value, $label, $check)
	// $value, $label, $check 皆為陣列形態
	// function printTextArea($id, $labelName, $additionClass, $value)
	for ($i = 0; $i < sizeof($id); $i++) {
		if($id[$i]['type'] == 'text')
			echo printTextForm($id[$i]['id'], $id[$i]['name'], $_SESSION['data'][$id[$i]['id']], $_SESSION['additionClass'][$id[$i]['id']], $_SESSION['placeholder'][$id[$i]['name']]);
		else if($id[$i]['type'] == 'radio')
			echo printRadioForm($id[$i]['id'], $id[$i]['name'], $id[$i]['value'], $id[$i]['lable'], $id[$i]['check']);
		else if ($id[$i]['type'] == 'textarea')
			echo printTextArea($id[$i]['id'], $id[$i]['name'], $_SESSION['additionClass'][$id[$i]['id']], $_SESSION['data'][$id[$i]['id']]);
		else if ($id[$i]['type'] == 'addition')
			echo printAddition($id[$i]['text']);
	}
?>
		<div align='right'>
			<input type='submit' class='btn btn-default submit' value='完成'>
		</div>
	</form>
</div>
</body
</html>