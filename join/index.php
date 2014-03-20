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
<?php
	if ($_SESSION['success']){
		// 顯示報名成功頁面
	}else{
		// 顯示報名頁面
		// printTextForm($id, $labelName, $value, $additionClass, $placeholder)
		echo printTextForm("name", "姓名", "顆顆", "has-success", "姓名");
	}
?>
	</form>
</div>
</body
</html>