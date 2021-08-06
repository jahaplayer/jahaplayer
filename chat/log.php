<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Securety</title>
</head>
<body>
    <header></header>
    <section>
        <center><form method="post">
            <div><input type="email" name="email" placeholder="Email"></div>
            <div><input type="password" name="pass" placeholder="Password"></div>
            <div><button type="submit" name="send">Sign In</button></div>
        </form></center>
    </section>
    <style>
        section{
            padding:20px;
        }
        input{
            border:1px solid #e0e0e0;
            width:582px;
            height:50px;
            outline:0;
            color:#444;
            font-family:Arial,Helvetica,sans-serif;
            border-radius:0.8rem;
            padding:0 15px;
            margin-bottom:10px;
            font-size:16px;
        }
        button{
            border:1px solid #4f84f4;
            background:#4f84f4;
            color:#fff;
            width:582px;
            height:50px;
            border-radius:0.8rem;
            outline:0;
            font-family:Arial,Helvetica,sans-serif;
            font-weight:lighter;
            font-size:16px;

        }
    </style>
    <?php
    if(isset($_POST["send"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $conn = new mysqli("localhost","admin","4221349n","asd");
        $sql = "SELECT email, `password` FROM `db`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($row["email"] == $email && $row["password"] == $pass){
                  setcookie("email",$email,time()+10800);
                  setcookie("pass",$pass,time()+10800);
                  header("Location:index.php");
              }
            }
          } else {
            echo "0 results";
          }
    }
    ?> 
</body>
</html>