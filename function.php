<?php
	function printTextForm($id, $labelName, $value, $additionClass, $placeholder) {
		$result = "<div class='form-group".$additionClass."' id='".$id."Form'>";
		$result = $result."<label class='col-sm-4 control-label' for='".$id."'>".$idName."</label>";
		$result = $result."<div class='col-sm-8'><input type='text' class='form-control' id='".$id."' placeholder='".$placeholder."' value='".$value."'>";
		$result = $result."</div></div>";
		return $result;
	}
?>