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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<style>
.joinForm {
    position: absolute;
    min-width: 200px;
    width: 50%;
    max-width: 600px;
    height: 50%;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

</style>

<title>報名 - 2014中央松數營</title>

</head>
<body>
<?php
	// 若欄位都正確顯示結果
	// 若欄位錯誤返回 index.php
	if ($_SESSION['success']){
		$result = "<div class='container joinForm'><h1 align='center'>第15屆暑期中央松數營報名表</h1><table class='table table-striped'>";
		for ($i = 0; $i < sizeof($id); $i++){
			if ($id[$i]['type'] != 'addition'){
				$result = $result."<tr>";
				$result = $result."<td>".$id[$i]['name']."</td>";
				$result = $result."<td>".$_SESSION['data'][$id[$i]['id']]."</td>";
				$result = $result."</tr>";
			}
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
