<html>
        <head>
                  <link rel="stylesheet" href="stylen1.css">
                  <?php $l = true; ?> 
        </head>
        <body>
               <header>
                     <h1 align="center">Ro`yxatdan o`tish</h1>
                 
               <?php
                    if (isset($_POST["submit"])){
                        if ($_POST["fam"] != "" && $_POST["ism"] != "" && $_POST["log"] != "" && $_POST["par"] != ""){
                            $fam = $_POST["fam"]; $ism = $_POST["ism"]; $log = $_POST["log"]; $par = $_POST["par"];
                            if (@$db = new mysqli("localhost", "asadbek", "12345", "dbtest")){
                                $db -> query("INSERT INTO foy (`id_foy`, `fam`, `ism`, `log`, `par`) VALUES (NULL, '$fam', '$ism', '$log', '$par')");
                        $id = $db ->insert_id;        
                        setcookie("id", $id, time()+60);
                        setcookie("log", $log, time()+60);
                        setcookie("par", $par, time()+60);
                        header("Location: kabinet.php");    
                            } else echo "ulanmadi";
                         } else echo "<p align='center'>qaytatdan urunib ko`ring</p>";
                    }   
               ?>
                <form action="royxat.php" method ="post">
                        <input type="text" name="fam" placeholder="Last name" autofocus="">
                        <input type="text" name="ism" placeholder="First name">
                        <input type="email" name="log" placeholder="User name">
                        <input type="password" name ="par" placeholder="Password">
                        <input type="submit" class="tugma" name="submit" value="Sign Up">
                        <input type="button" class="tugma" value="Kirish" onclick="location.href = 'kirish.php'" style="background:#11bb00;border:1px solid #11bb00;margin-top:30px"> 
                </form>
                </header>
        </body>
</html>
