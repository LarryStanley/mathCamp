<?php
	session_start();
?>
<html>
<head>
<!-- Default setting -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- css animate  -->
<link rel="stylesheet" href="../animate.css">

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<title>報名 - 2014中央松數營</title>

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

</head>
<body>
<?php
	if ($_SESSION['success']){
		include '../../sqlInfo.php';
		$names = '';
		for ($i = 0; $i < 5; $i++){
			if ($_SESSION['data']['groupName'.$i])
					$names = $names.", ".$_SESSION['data']['groupName'.$i];
		}

		$connect = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWD);
		$connect->query('SET NAMES UTF8');
		$result = $connect->prepare("INSERT into group_data values(
											:school,
											:city,
											:names)");
		$where = array(
					':school' => $_SESSION['data']['groupSchool'], 
					':city' => $_SESSION['data']['groupCity'],
					':names' => $names);
		$result->execute($where);
		session_destroy();
		echo '<div class="container center" align="center"><h1>恭喜你團報成功了！</h1><br>';
		echo "<a class='btn btn-default' href='../' align='right'>回首頁</a></div>";
	}else{
		header('Location: index.php');
	}
?>
</body>
</html>
