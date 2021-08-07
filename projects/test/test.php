<?php
	if (@$db = new mysqli("localhost", "asadbek", "12345", "dbtest_imt")){
		$id = $_COOKIE["fan"]; 
		$sav = $db->query("SELECT * FROM `sav` WHERE fan = '$id';");
		$fan = $db->query("SELECT * FROM `foy` WHERE id_fan = '$id'");
		$num = $sav->num_rows;
		$array = array();
		for ($i=0; $i < 5; $i++){
			$k = rand(1, $num); 
			if (!(in_array($k, $array))) $array[] = $k; else $i--;
		}
		session_start();
		$_SESSION["jadval"] = $array;
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
	<style>
		*{
			margin: 0px; padding: 0px;
		}
		header{
			height: 100px; width: 100%;
			background: #ff00ff;
			border-bottom: 1px solid black;
		}
		main{
			margin: auto;
			width: 70%;
			padding-top: 40px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		li{
			padding: 20px;
			display: inline-block;
		}
		section{
			position: fixed;
			left: 0px;
			top: 30%;
			background:  #ff00ff;
		}
		section p{
			font-weight: bold;
			font-size: 23px;
			padding: 30px;
		}
		.tugma{
			padding: 30px;
			border-radius: 10px;
			background: #ff00ff;
			width: 200px;
			display: inline-block; 
			font-size: 24px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<header>
		<h1 align="center" style="padding-top: 30px;">TEST HEADER</h1>
	</header>
	<!-- <section>
		<p>MATEMATIKA</p>
		<p>FIZIKA</p>
		<p>ENGLISH</p>
	</section> -->
	<main>
		<p align="center" style="font-size: 25px; font-family: Arial-black; font-weight: bold; padding-bottom: 50px">
			<?php
				$arrayfan = $fan->fetch_assoc();
				echo $arrayfan["fan"];
			?>
		</p>
		<form action="tek.php" method="post">
		<div>
			<?php
				for ($i=0; $i < count($array); $i++){
					$d = $i + 1;
					echo '<div style="height: auto; padding: 30px; width: 100%; font-size: 20px;"><p>'.$d.'. ';
					$sav = $db->query("SELECT * FROM `sav` WHERE id_sav = '$array[$i]'");
					$arrayfan = $sav->fetch_assoc();
					echo $arrayfan["savol"].'</p></div>';
					echo '<div style = "padding-left: 80px;"><ol>';
					$jav = $db->query("SELECT * FROM `jav` WHERE sav = '$array[$i]'");
					while ($arrayfan = $jav->fetch_assoc())
						echo '<input type="radio" name="'.$array[$i].'"value="'.$arrayfan["id_jav"].'"><li>'.$arrayfan["javob"].'</li><br>';
					echo "</ol></div>";
			}
			?> 	
		</div>
		<div>
			<input type="button" value="Ortga qaytish" onclick="location.href ='index.php'" class="tugma">
			<input type="submit" name="sub" value="Jo`natish" class="tugma">
		</div>
		</form>	
	</main>
</body>
</html>