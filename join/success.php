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
	if ($_SESSION['success']){
		include '../../sqlInfo.php';
		$connect = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWD);
		$connect->query('SET NAMES UTF8');
		$result = $connect->prepare("INSERT into join_member values(
											:name, 
											:nickname, 
											:sex,
											:securityNumber, 
											:phone, 
											:cellphone, 
											:address, 
											:email, 
											:school, 
											:grade, 
											:parentsName, 
											:parentsRelation, 
											:parentsPhone, 
											:parentsAddress, 
											:tshirtsize, 
											:diet, 
											:otherDietInfo, 
											:illness, 
											:introduction, 
											:source, 
											:addition)");
		$where = array(
					':name' => $_SESSION['data']['name'], 
					':nickname' => $_SESSION['data']['nickname'], 
					':sex' => $_SESSION['data']['sex'], 
					':securityNumber' => $_SESSION['data']['securityNumber'], 
					':phone' => $_SESSION['data']['phone'], 
					':cellphone' => $_SESSION['data']['cellphone'], 
					':address' => $_SESSION['data']['address'],
					':email' => $_SESSION['data']['email'], 
					':school' => $_SESSION['data']['school'], 
					':grade' => $_SESSION['data']['grade'], 
					':parentsName' => $_SESSION['data']['parentsName'], 
					':parentsRelation' => $_SESSION['data']['parentsRelation'],
					':parentsPhone' => $_SESSION['data']['parentsPhone'], 
					':parentsAddress' => $_SESSION['data']['parentsAddress'],
					':tshirtsize' => $_SESSION['data']['tshirtsize'], 
					':diet' => $_SESSION['data']['diet'], 
					':otherDietInfo' => $_SESSION['data']['otherDietInfo'], 
					':illness' => $_SESSION['data']['illness'], 
					':introduction' => $_SESSION['data']['introduction'], 
					':source' => $_SESSION['data']['source'], 
					':addition' => $_SESSION['data']['addition']);
		$result->execute($where);
		session_destroy();
		echo '<div class="container center" align="center"><h1>恭喜你報名成功了！</h1>';
		echo '<p align="center">我們會在24小時內寄信給您確認報名</p>';
		echo "<a class='btn btn-default' href='../group/' align='right'>撰寫團報單</a>";
		echo "<a class='btn btn-default' href='../' align='right'>回首頁</a></div>";
	}else{
		header('Location: index.php');
	}
?>
</body>
</html>
