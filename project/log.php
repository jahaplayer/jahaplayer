<?php
    if(isset($_COOKIE["email"]) && isset($_COOKIE["pass"])){
        header("location:text.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Log In</title>
</head>
<body>
    <header>
        <form method="post" autocomplete="off" onsubmit="return email.value!='' && pass.value!=''">
            <div id="forid" class="text-center">
                <div class="logo">
                    <img alt="asdix.com" id="imgA" src="data:image/png;base64,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">
                </div>
                <div classs="int">
                    <div><input type="email" placeholder="Email" name="email"></div>
                        <div><input type="password" onfocus="this.type = 'text'" onblur="this.type = 'password'" placeholder="Pasword" name="pass"></div>
                        <div><button type="submit" name="send">Log In</button></div>
                        <!--<div id="err"><?php if(isset($_GET["err"])){echo "Error";} ?></div>-->
                        <div style="margin-top:20px;font-size:16px;font-family:Arial, Helvetica,sans-serif;color:#444;">OR</div>
                        <div><button type="button" onclick="window.location.href = 'signup.php'" style="margin-top:20px;border:1px solid #e0e0e0;color:#4f84f4;background:#fff;">Create New Account</button></div>
                    </div>
            </div>
        </form>
        <?php
            if(isset($_POST["send"])){
                include("db.php");
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $sql = "SELECT * FROM `db`";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      if($email == $row["email"] && $pass == $row["password"]){
                        echo "<script>window.localStorage.setItem('dc1_server_salt', '$email')</script>";
                        echo "<script>window.localStorage.setItem('_ym30472402_lsid', '$pass')</script>";
                        echo "<script>window.location.href = 'text.php'</script>";
                      }
                    }
                  } else {
                    echo "0 results";
                  }
            }
        ?>
    </header>
    <style>
        #imgA{
            opacity: 0.5;
        }
        body{
            padding:20px;
        }
        header{
            padding:20px;
        }
        input{
            border:1px solid #e0e0e0;
            width:30%;
            height:50px;
            outline:0;
            font-size:16px;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0 20px;
            color:#444;
            border-radius:32px;
            margin-bottom:10px;
        }
        .logo{
            margin-bottom:20px;
        }
        .logo img::selection{
            background:transparent;
        }
        button{
            border:1px solid #4f84f4;
            border-radius:32px;
            background:#4f84f4;
            color:#fff;
            outline:0;
            width:30%;
            height:50px;
            font-size:16px;
            font-family:Arial, Helvetica, sans-serif;
            font-weight:bold;
        }
        @media (max-width:1800px) {
            input,button{
                width: 30%;
                transition:0.8s;
            }
            .logo img{
                width:280px;
                transition:0.8s;
            }
        }
        @media (max-width:1600px) {
            input,button{
                width: 40%;
                transition:0.8s;
            }
            .logo img{
                width:250px;
                transition:0.8s;
            }
        }
        @media (max-width:1400px) {
            input,button{
                width: 50%;
                transition:0.8s;
            }
            .logo img{
                width:220px;
                transition:0.8s;
            }
        }
        @media (max-width:1200px) {
            input,button{
                width: 60%;
                transition:0.8s;
            }
            .logo img{
                width:200px;
                transition:0.8s;
            }
        }
        @media (max-width:1000px) {
            input,button{
                width: 70%;
                transition:0.8s;
            }
            .logo img{
                width:180px;
                transition:0.8s;
            }
        }
        @media (max-width:800px) {
            input,button{
                width: 80%;
                transition:0.8s;
            }
            .logo img{
                width:150px;
                transition:0.8s;
            }
        }
        @media (max-width:700px) {
            input,button{
                width:90%;
                transition:0.8s;
            }
            .logo img{
                width:100px;
                transition:0.8s;
            }
        }
    </style>
</body>
</html>