<?php
	$id = array(
		0=> array('id'=>'name', 'name'=>'姓名'),
		1=> array('id'=>'nickname', 'name'=>'綽號'),
		2=> array('id'=>'securityNumber', 'name'=>'身分證字號'),
		3=> array('id'=>'phone', 'name'=>'聯絡電話'),
		4=> array('id'=>'cellphone', 'name'=>'手機'),
		5=> array('id'=>'address', 'name'=>'聯絡地址'),
		6=> array('id'=>'email', 'name'=>'Email'),
		7=> array('id'=>'school', 'name'=>'就讀學校'),
		8=> array('id'=>'grade', 'name'=>'年級'),
		9=> array('id'=>'parentsName', 'name'=>'姓名'),
		10=> array('id'=>'parentsRelation', 'name'=>'關係'),
		11=> array('id'=>'parentsPhone', 'name'=>'電話'),
		12=> array('id'=>'parentsAddress', 'name'=>'地址'),
	);
	
	function printTextForm($id, $labelName, $value, $additionClass, $placeholder) {
		$result = "<div class='form-group ".$additionClass."' id='".$id."Form'>";
		$result = $result."<label class='col-sm-4 control-label'>".$labelName."</label>";
		$result = $result."<div class='col-sm-8'><input type='text' class='form-control' id='".$id."' name='".$id."' placeholder='".$placeholder."' value='".$value."'>";
		$result = $result."</div></div>";
		return $result;
	}
?>