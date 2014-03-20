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
			':name' => $_POST['name'], 
			':nickname' => $_POST['nickname'], 
			':sex' => $_POST['sex'], 
			':securityNumber' => $_POST['securityNumber'], 
			':phone' => $_POST['phone'], 
			':cellphone' => $_POST['cellphone'], 
			':address' => $_POST['address'],
			':email' => $_POST['email'], 
			':school' => $_POST['school'], 
			':grade' => $_POST['grade'], 
			':parentsName' => $_POST['parentsName'], 
			':parentsRelation' => $_POST['parentsRelation'],
			':parentsPhone' => $_POST['parentsPhone'], 
			':parentsAddress' => $_POST['parentsAddress'],
			':tshirtsize' => $_POST['tshirtsize'], 
			':diet' => $_POST['diet'], 
			':otherDietInfo' => $_POST['otherDietInfo'], 
			':illness' => $_POST['illness'], 
			':introduction' => $_POST['introduction'], 
			':source' => $_POST['source'], 
			':addition' => $_POST['addition']);
$result->execute($where);
mail('kill.xmurderer@gmail.com', 'test', 'test');
?>
