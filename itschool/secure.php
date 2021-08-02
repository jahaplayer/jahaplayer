<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>admin</title>
</head>
<body>
    <header></header>
    <section>
        <form method="post" autocomplete="off">
            <div><input type="email" placeholder="Email" name="email"></div>
            <div><input type="password" placeholder="Password" name="pass"></div>
            <div><button type="submit" name="send">Sign In</button></div>
        </form>
    </section>
    <?php
        if(isset($_POST["send"])){
            $conn = new mysqli("localhost","admin","4221349n","asd");
            $sql = "SELECT `email`, `password`, `ver` FROM `db`";
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row["email"] == $email && $row["password"] == $pass){
                        if($row["ver"] == "1"){
                            setcookie("ev",$email,time()+10800);
                            setcookie("pa",$email,time()+10800);
                            header("Location:adminq.php");
                        }else{
                            echo "You're not verified from asdix.com";
                            echo "<div><a href='ver.php'>Verify my account</a></div>";
                            setcookie("ev","",time()-10800);
                            setcookie("pa","",time()-10800);
                        }
                    }
                }
            } else {
                echo "0 results";
            }
        }
    ?>
    <style>
        section{
            padding:20px;
        }
    </style>
</body>
</html>