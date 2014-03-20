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
<?php
	// 若欄位都正確顯示結果
	// 若欄位錯誤返回 index.php
	if ($_SESSION['success']){
		$result = "<div class='container joinForm'><h1 align='center'>第15屆暑期中央松數營報名表</h1><table class='table table-striped'>";
		for ($i = 0; $i < sizeof($id); $i++){
			if ($id[$i]['type'] != 'addition')
				$result = $result."<tr>";
				$result = $result."<td>".$id[$i]['name']."</td>";
				$result = $result."<td>".$_SESSION['data'][$id[$i]['id']]."</td>";
				$result = $result."</tr>";
		}
		$result = $result."</table>";
		$result = $result."<a class='btn btn-default' href='index.php'>修改</a></div>";
		echo $result;
	}else
		header('Location: index.php');
?>
<body>
</html>