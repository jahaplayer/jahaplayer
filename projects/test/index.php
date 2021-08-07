<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<style type="text/css">
	*{
		margin: 0; padding: 0;
	}
	header{
		width: 100%; height: 70px;
		background:  #ff00ff;
	}
	.menyu{
		width: 600px;
	}	
	.menyu > h1{
		padding: 85px 70px 85px 70px;
		background: yellow;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin: 50px;
	}
	.main{
		margin: 30px;
	}
	main{
		width: 70%;
		margin: auto;
		display: flex;
		flex-wrap: wrap;
	}
</style>
<script type="text/javascript">
	function func(a) {
		var d = new Date();
    	d.setTime(d.getTime()+36000); 
    	var End_Date = d.toGMTString();
    	document.cookie="fan ="+a+";expires="+End_Date+";path= '/'";
    	location.href = "test.php";
	}
</script>
<body>
	<header>
		<h1 align="center">TEST.UZ</h1>
	</header>
	<main>
		<?php
			if (@$db = new mysqli ("localhost", "asadbek", "12345", "dbtest_imt")){
				$tan = $db->query("SELECT * FROM foy");
				if ($tan->num_rows > 0)
					while ($satr = $tan->fetch_assoc())
						echo "<div class='menyu' onclick = \"func(".$satr["id_fan"].")\"".
    						"><h1>".$satr["fan"]."</h1></div>";
			}

		?>
	</main>
</body>
</html>