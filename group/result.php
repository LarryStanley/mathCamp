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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<title>報名 - 2014中央松數營</title>

</head>
<body>
<?php
	// 若欄位都正確顯示結果
	// 若欄位錯誤返回 index.php
	if ($_SESSION['success']){
		$result = "<div class='container joinForm'><h1 align='center'>第15屆暑期中央松數營報名表 - 團報單</h1><table class='table table-striped'>";
		$result = $result."<td><tr>學校</tr><tr>".$_SESSION['data']['groupSchool']."</tr><td>";
		$result = $result."<td><tr>縣/市</tr><tr>".$_SESSION['data']['groupCity']."</tr><td>";
		for ($i = 0; $i < 5; $i++){
			if ($_SESSION['data']['groupName'.$i])
				$result = $result."<tr><td>姓名</td><td>".$_SESSION['data']['groupName'.$i]."</td><tr>";
		}
		$result = $result."</table>";
		$result = $result."<div align='center'><a class='btn btn-default' href='index.php' align='right'>修改</a>  ";
		$result = $result."<a class='btn btn-default' href='success.php' align='right'>送出</a></div></div>";
		echo $result;
	}else
		header('Location: index.php');
?>
</body>
</html>