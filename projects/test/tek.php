<?php
	if (@$db = new mysqli("localhost", "asadbek", "12345", "dbtest_imt")){
		session_start(); $javob = array();
		$jadval = $_SESSION["jadval"];
		if (isset($_POST["sub"])){
			for ($i=0; $i<count($jadval); $i++){
				$javob[] = $_POST[(string)$jadval[$i]];
			}
		}
		$s = 0; 
		for ($i=0; $i<count($javob); $i++){
			$jav = $db->query("SELECT * FROM `jav` WHERE id_jav = '$javob[$i]'");
			$arrayjav = $jav->fetch_assoc();
			if ($arrayjav["togri"] == 1) $s++;
		}
		echo $s." ta javobingiz tog`ri";
	}	
?>