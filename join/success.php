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
<link rel="stylesheet" href="../style.css">
<script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php
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
	echo '<div class="container center"><h1>恭喜你報名成功了！</h1></div>';
?>
</body>
</html>