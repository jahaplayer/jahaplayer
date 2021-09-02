<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <header class="text-center">
        <center><div id="head">
                    <div style="font-size:20px;font-weight:light;font-family:Arial;width:100%;">Войти</div>
                    <form method="post" action="login.php" onsubmit="return tel.value!='' && pass.value!=''" autocomplete="off">
                        <div><input type="number" name="tel" id="tel" placeholder="Телефон номер"></div>
                        <div><input type="password" name="pass" id="pass" placeholder="Пароль" onfocus="this.type = 'text'" onblur="this.type = 'password'"></div>
                        <?php
                            if(isset($_GET["false"]) == 2){
                                echo "<div style='font-size:12px;text-transform:uppercase;font-weight:bold;color:#ff0000;padding:5px 0px'>Спасибо за регистрацию</div>";
                            }
                        ?>
                        <div><button type="submit" name="set" id="btn-set">Войти</button></div>
                        <div><button type="button" id="btn-log" onclick="window.location.href = 'index.php'">Регистрация</button></div>
                    </form>
                    <?php
                        if(isset($_COOKIE["tel"]) && isset($_COOKIE["p"])){
                            header("location:user.php");
                        }
                        if(isset($_POST["set"])){
                            $tel = $_POST["tel"];
                            $pass = $_POST["pass"];
                            $conn = new mysqli("localhost", "admin", "4221349n", "asd");
                            $sql = "SELECT * FROM `order1`";
                            $result = $conn->query($sql);
                            if(strlen($pass) < 8){
                                header("location:login.php?false=2");
                            }
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    if($row["tel"] == $tel && $row["password"] == $pass){
                                        setcookie("tel",$tel,time()+10800);
                                        setcookie("p",$pass,time()+10800);
                                        header("location:user.php");
                                    }
                                }
                            } else {
                                
                            }$conn->close();
                        }
                    ?>
            </div></center>
    </header>
    <style>
        *{
            font-family:Arial,Helvetica,sans-serif;
        }
        body{
            padding:20px;
            background: #fff;
        }
        header{
            margin-top:100px;
        }
        #fio{
            border:none;
            border-bottom:1px solid #e0e0e0;
            outline:0;
            width:100%;
            height:50px;
            padding:0 20px;
            margin-bottom:10px;
            color:#444;
            font-size:16px;
            transition:0.5s;
            border-radius:32px;
        }
        #fio:focus{
            border-bottom:1px solid #4f84f4;
        }
        #tel{
            border:none;
            border-bottom:1px solid #e0e0e0;
            outline:0;
            width:100%;
            height:50px;
            padding:0 20px;
            margin-bottom:10px;
            color:#444;
            font-size:16px;
            transition:0.5s;
            border-radius:32px;
        }
        #tel:focus{
            border-bottom:1px solid #4f84f4;
        }
        #pass{
            border:none;
            border-bottom:1px solid #e0e0e0;
            outline:0;
            width:100%;
            height:50px;
            padding:0 20px;
            margin-bottom:10px;
            color:#444;
            font-size:16px;
            transition:0.5s;
            border-radius:32px;
        }
        #pass:focus{
            border-bottom:1px solid #4f84f4;
        }
        #btn-set{
            border:1px solid var(--bg);
            outline:0;
            background:var(--bg);
            color:var(--s);
            width:100%;
            height:50px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.2s;
            border-radius:32px;
            margin-top:10px;
            margin-bottom:10px;
        }
        #btn-log{
            border:1px solid #e0e0e0;
            outline:0;
            background:#fff;
            color:var(--bg);
            width:100%;
            height:50px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            border-radius:32px;
            margin-top:10px;
            transition:0.5s;
            margin-bottom:10px;
        }
        :root{
            --bg:#4f84f4;
            --s:#fff;
            --highlight-color: #4f84f4;
        }
        ::selection{
            background:none;
        }
        #head{
            box-shadow:0 0 5px #e0e0e0;
            padding:20px;
            border-radius:16px;
            width:35%;
        }
        input::selection{
            color:#4f84f4;
        }
    </style>
</body>
</html>