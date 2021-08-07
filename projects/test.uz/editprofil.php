<!DOCTYPE html>
<html>
<head>
	<title>editprofile</title>
	<style type="text/css">
		main{
			width: 65%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			position: absolute;
			top: 100px; left: 15%;
			padding: 30px;
		}
	</style>
</head>
<body>
	<main>
		<img src="avatar.jpg" style="border-radius: 50%; width: 106px; height: 106px; margin-left: 610px;">
		<p align="center" style="font-size: 28px; font-weight: bold; margin: 0;">Familiya ism</p>
		<p style="display: inline-block;">Manzil : </p> <select>
			<option>Namangan</option>
			<option>Andijon</option>
			<option>Farg`ona</option>
			<option>Toshkent</option>
			<option>Xiva</option>
		</select><br>
		<p style="display: inline-block;">Tug`ilgan yil : </p> <input type="date"><br>
		<p style="display: inline-block;">Jinsi : </p> <input type="radio"> ERKAK <input type="radio"> Ayol<br>
		<p style="display: inline-block;">shaxsiy malumot : </p> <textarea width="500px" height="50px"></textarea><br>
		<p style="display: inline-block;">kanal yaratish : </p><input type="text"> qidirishda nomi <input type="text"> <button>yaratish</button><br>
		<p style="display: inline-block;">grupa  yaratish : </p><input type="text"> qidirishda nomi <input type="text"> <button>yaratish</button><br>
		<p align="center"><button style="padding: 5px; font-size: 20px">Tasdiqlash</button></p>
	</main>
</body>
</html>