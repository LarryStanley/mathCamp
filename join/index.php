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
	<form class='form-horizontal' role='form' id='joinForm' action='processJoin.php' method='POST'>
		<p align='center'>放輕鬆，報名松數營很簡單！</p>
<?php
	if ($_SESSION['success']){
		// 顯示報名成功頁面
	}else{
		// 顯示報名頁面
		$idInfo = array(
			0=>array("id"=>"name", "labelName"=>"姓名", "value"=>$_SESSION['name'], "additionClass"=>"", "placeholder"=>"姓名"),
			1=>array("id"=>"nickname", "labelName"=>"綽號", "value"=>$_SESSION['nickname'], "additionClass"=>"", "placeholder"=>"綽號"),
		);
		// printTextForm($id, $labelName, $value, $additionClass, $placeholder)
		for ($i = 0; $i < sizeof($idInfo); $i++) {
			echo printTextForm($idInfo[$i]["id"], $idInfo[$i]["labelName"], $idInfo[$i]["value"], $idInfo[$i]["additionClass"], $idInfo[$i]["placeholder"]);
		}
	}
?>
	</form>
</div>
</body
</html>