<html>
        <head>
                  <link rel="stylesheet" href="stylen1.css">
                   <?php $i2=true; ?> 
        </head>
        <?php
                if (isset($_POST["submit"])){
                @$login = $_POST["login"];
                @$parol = $_POST["parol"]; $l = false;
                if ($db = new mysqli("localhost", "asadbek", "12345", "dbtest")){
                        $sql = "SELECT * FROM `foy`"; 
                        $tanlash = $db->query($sql);
                        if ($tanlash -> num_rows > 0){
                        while ($satr = $tanlash -> fetch_assoc()){
                                echo '<script>alert($satr["log"]+"  "+$satr["par"])</script>';
                                if ($satr["log"] == $login && $satr["par"] == $parol){
                                        $l = true; 
                                        $id = $satr["id_foy"];
                                        break;
                                        }  
                                }
                        }
                        $db->close();
                }
                if ($l == true){
                        setcookie("id", $id);
                        setcookie("log", $login);
                        setcookie("par", $parol);
                        header("Location: kabinet.php");    
                } else $i2 = false;
        }  
        ?>
        <body>
              <header>
               <h1 align="center"> <?php if ($i2) echo "Kirish"; else echo "Qaytatdan urunib ko`ring"; ?> </h1> 
                <form action = "kirish.php" method= "post" autocomplete="off" autofocus="">
                        <input type="email" name = "login" placeholder="Login">
                        <input type="password" name = "parol" placeholder="Parol">
                        <input type="submit" value="Kirish" class="tugma" name = "submit" action="kabinet.php" method="post">
                        <input type="button" value="Ro`yxatdan o`tish" class="tugma" style="background:#11bb00;border:#11bb00;margin-top:30px;" onclick="location.href = 'royxat.php'">
                </form>
              </header>  
        </body>

</html> 
