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
<div class='container joinForm'>
	<h1 align='center'>第15屆暑期中央松數營報名表</h1>
	<form class='form-horizontal' role='form' id='joinForm' action='processGroup.php' method='POST'>
	<?php
		$chineseNumber = array('ㄧ', '二', '三', '四', '五');
		if (!$_SESSION['placeholder']){
			$_SESSION['placeholder']['groupSchool'] = '學校';
			$_SESSION['placeholder']['groupCity'] = '縣/市';
			$_SESSION['placeholder']['groupName'.$i] = '姓名'.$chineseNumber[$i];
		}
		echo printTextForm('school', '學校',  $_SESSION['data']['groupSchool'], $_SESSION['additionClass']['groupSchool'], $_SESSION['placeholder']['groupSchool'], '');
		echo printTextForm('city', '縣/市',  $_SESSION['additionClass']['groupCity'], $_SESSION['additionClass']['groupCity'], $_SESSION['placeholder']['groupCity'], '');
		echo '<HR>';
		for ($i= 0; $i < 5; $i++)
			echo printTextForm('groupName'.$i, '姓名'.$chineseNumber[$i],  $_SESSION['data']['groupName'.$i], $_SESSION['additionClass']['groupName'.$i], $_SESSION['placeholder']['groupName'.$i], '');
	?>
		<div align='right'>
			<input type='submit' class='btn btn-default submit' value='完成'>
		</div>
	</form>
</div>
</body>
</html>