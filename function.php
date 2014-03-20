<?php
	$id = array(
		0=> array('id'=>'name', 'name'=>'姓名', 'type'=>'text', 'required'=>true),
		1=> array('id'=>'nickname', 'name'=>'綽號', 'type'=>'text'),
		2=> array('id'=>'sex', 'name'=>'性別', 'type'=>'radio', 'lable'=>array(0=>'男', 1=>'女'), 'value'=>array(0=>'男', 1=>'女'), 'check'=>array(0=>true, 1=>false)),
		3=> array('id'=>'securityNumber', 'name'=>'身分證字號', 'type'=>'text'),
		4=> array('id'=>'phone', 'name'=>'聯絡電話', 'type'=>'text'),
		5=> array('id'=>'cellphone', 'name'=>'手機', 'type'=>'text'),
		6=> array('id'=>'address', 'name'=>'聯絡地址', 'type'=>'text'),
		7=> array('id'=>'email', 'name'=>'Email', 'type'=>'text'),
		8=> array('id'=>'school', 'name'=>'就讀學校', 'type'=>'text'),
		9=> array('id'=>'grade', 'name'=>'年級', 'type'=>'text'),
		10=> array('id'=>'parentsName', 'name'=>'姓名', 'type'=>'text'),
		11=> array('id'=>'parentsRelation', 'name'=>'關係', 'type'=>'text'),
		12=> array('id'=>'parentsPhone', 'name'=>'電話', 'type'=>'text'),
		13=> array('id'=>'parentsAddress', 'name'=>'地址', 'type'=>'text'),
		14=> array('id'=>'tshirtsize', 'name'=>'活動T-shirt size', 'type'=>'radio', 'lable'=>array(0=>'2XL', 1=>'XL', 2=>'L', 3=>'M', 4=>'S'), 'value'=>array(0=>'2XL', 1=>'XL', 2=>'L', 3=>'M', 4=>'S'), 'check'=>array(0=>true, 1=>false, 2=>false, 3=>false, 4=>false)),
		15=> array('id'=>'diet', 'name'=>'特殊飲食習慣', 'type'=>'radio', 'lable'=>array(0=>'葷', 1=>'素'), 'value'=>array(0=>'葷', 1=>'素'), 'check'=>array(0=>true, 1=>false)),
		16=> array('id'=>'illness', 'name'=>'特殊病例', 'type'=>'text'),
	);
	
	function printTextForm($id, $labelName, $value, $additionClass, $placeholder) {
		$result = "<div class='form-group ".$additionClass."' id='".$id."Form'>";
		$result = $result."<label class='col-sm-4 control-label'>".$labelName."</label>";
		$result = $result."<div class='col-sm-8'><input type='text' class='form-control' id='".$id."' name='".$id."' placeholder='".$placeholder."' value='".$value."'>";
		$result = $result."</div></div>";
		return $result;
	}
	
	function printRadioForm($id, $radioName, $value, $label, $check) {
		// $value, $label, $check 皆為陣列形態
		$result = "<div class='form-group'><label for='sex' class='col-sm-4 control-label'>".$radioName."</label><div class='col-sm-8'>";
		for ($i = 0; $i < sizeof($value); $i++){
			$result = $result."<div class='radio'><label><input type='radio' name='".$id."' value='".$value[$i]."' ";
			if ($check[$i])
				$result = $result."checked";
			$result = $result.">".$label[$i]."</label></div>";
		}
		$result = $result."</div></div>";
		return $result;
	}
?>