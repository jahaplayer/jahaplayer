<!DOCTYPE html>
<html>
<head>
	<title>GROUP</title>
	<style type="text/css">
		*{
			margin: 0; padding: 0;
		}
		header{
			width: 100%;
			height: 60px;
			font-size: 25px;
			font-weight: bold;
			text-align: center;
			background: #ff00ff;
		}
		main{
			width: 65%;
			margin: auto;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#matn{
			width: 80%;
			font-weight: bold;
			padding: 15px;
		}
		form > button{
			width: 8%;
			height: 40px;
		}
		section{
			height: 700px;
			width: 100%;
			background: white;
			position: relative;
		}
		section > div{
			position: absolute;
			bottom: 0px;
			right: 0px;
			margin: 20px 50px 10px 50px;
			width: 95%;
			
		}
		.left{
			float: left;
			margin-right: 100%;
			border-radius: 20px 20px 20px 0;
			background: blue; 
			font-size: 18px;
			padding: 10px 15px 10px 15px;
			margin-left: 10px;
			color: white;
		}
		.right{
			color: white;
			float: right;
			margin-left: 100%;
			border-radius: 20px 20px 0px 20px;
			background: blue; 
			font-size: 18px;
			padding: 10px 15px 10px 15px;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<header>
		<h1>DASTURCHILAR</h1>
	</header>
	<main>
		<section>
			<div>
				<div class="left">
					<div style="width: auto;border-bottom: 1px solid black;width: 200px;padding-bottom: 15px;float: left;margin-bottom: 15px;"><img src="avatar.jpg" width="50px" height="50px" style="border-radius: 50%; float: left;"><p style="padding-left: 15px;float: left;padding-top: 15px;">ism familiya</p></div>
					Salom
				</div>
				<div class="right">

					Alik
				</div>
			</div>
		</section>
		<footer>
			<form>
				<input type="text" id="matn">
				<button>yuborush</button>
				<input type="file">
			</form>
		</footer>
	</main>
</body>
</html>