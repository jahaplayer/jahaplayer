<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

</head>
<body>
    <header class="text-center">
        <center><div id="head">
                <div style="font-size:20px;font-weight:light;font-family:Arial;width:100%;">Регистрация</div>
                <form method="post" action="index.php" onsubmit="return fio.value!='' && tel.value!='' && pass.value!=''" autocomplete="off">
                    <div><input type="text" name="fio" id="fio" placeholder="Имя и Фамилия"></div>
                    <div><input type="email" name="tel" id="tel" placeholder="Почта"></div>
                    <div><input type="password" name="pass" id="pass" placeholder="Пароль" onfocus="this.type = 'text'" onblur="this.type = 'password'"></div>
                    <?php
                        if(isset($_GET["false"]) == 1){echo "<div style='font-size:12px;text-transform:uppercase;font-weight:bold;color:#ff0000;padding:5px 0px'>Аккаунт уже существует</div>";}
                        if(isset($_GET["true"]) == 1){echo "<div style='font-size:12px;text-transform:uppercase;font-weight:bold;color:#444;padding:5px 0px'>Спасибо за регистрацию</div>";}
                    ?>
                    <div><button type="submit" name="set" id="btn-set">Создать новый аккаунт</button></div>
                    <div><button type="button" id="btn-log" onclick="window.location.href = 'login.php'">Войти</button></div>
                    
                </form>
        </div></center>
        <div>
            <div class="arrow">
                <div class="arrow__body" style="font-size:16px"></div>
                <?php 
                    $conn = new mysqli("localhost","admin","4221349n","asd");
                    $sq1 = "SELECT * FROM `order1`";
                    $result = $conn->query($sq1);
                    echo "<div style='padding-right:80%;font-family:Arial;font-weight:light;margin-top:5px;color:rgb(0,0,0,0.6)'><span id='num_rows'>".$result->num_rows."</span><span style='font-size:10px;font-weight:bold;text-transform:uppercase;font-family:arial'>subscribers</span></div>";
                    ?>
            </div>
        </div>
        <script>
            var num = document.getElementById("num_rows").textContent
                if(num > 1000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K"
                }
                else if(num > 2000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 3000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 4000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 5000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 6000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 7000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 8000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                else if(num > 9000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"K" 
                }
                if(num > 10000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 20000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 30000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 40000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 50000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 60000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 70000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 80000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                else if(num > 90000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0K" 
                }
                if(num > 100000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K"
                }
                else if(num > 200000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 300000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 400000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 500000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 600000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 700000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 800000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                else if(num > 900000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"00K" 
                }
                if(num > 1000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M"
                }
                else if(num > 2000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 3000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 4000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 5000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 6000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 7000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 8000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                else if(num > 9000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"M" 
                }
                if(num > 10000000){
                    document.getElementById("num_rows").textContent = document.getElementById("num_rows").textContent[0]+"0M"
                }
        </script>
        <?php
            if(isset($_POST["set"])){
                $conn = new mysqli("localhost","admin","4221349n","asd");
                $fio = $_POST["fio"];
                $tel = $_POST["tel"];
                $pass = $_POST["pass"];
                $sq1 = "SELECT `email` FROM `order1`";
                $result = $conn->query($sq1);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      if($row["email"] == $tel){
                        die(
                            "<script>window.location.href = 'index.php?false=1'</script>"
                        );
                      }
                    }
                  } else {
                    
                  }
                $sql = "INSERT INTO `order1` VALUES ('NULL', '$fio', '$tel', '$pass', '0')";
                if ($conn->query($sql) === TRUE) {
                    setcookie("tel",$tel,time()+10800);
                    setcookie("p",$pass,time()+10800);
                    echo "<script>window.location.href = 'login.php?true=1'</script>";
                  } else {
                    
                  }$conn->close();
            }
        ?>
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
        .arrow {
        position: fixed;
        right: 0;
        width: calc(20% - 200px);
        height: 15%;
        }

        .arrow__body {
        width: 100%;
        height: 95%;
        margin-left: 11px;
        border-width: 5px 0 0 5px;
        border-style: dashed;
        border-color: var(--highlight-color);
        border-top-left-radius: 100%;
        }

        .arrow__body::after {
        content: '';
        font-size:10px;
        position: absolute;
        bottom: 0;
        left: 0;
        border-width: 20px 15px 0;
        border-style: solid;
        border-color: var(--highlight-color) transparent transparent;
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