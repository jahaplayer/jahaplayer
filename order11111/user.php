<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
</head>
<body>
    <?php
        if(!(isset($_COOKIE["tel"])) && !isset($_COOKIE["p"])){
            header("location:login.php");
        }
        $conn = new mysqli("localhost", "admin", "4221349n", "asd");
        @$tel = $_COOKIE["tel"];
        @$pass = $_COOKIE["p"];
        $sql = "SELECT * FROM `order1`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if($row["tel"] == $tel && $row["password"] == $pass){
                  echo "Welcome ".$row["fio"];
              }
              $s = 0;
            }
          } else {
            
          }$conn->close();
    ?>
    <style>
        *{
            font-family:Arial,Helvetica,sans-serif;
        }
    </style>
</body>
</html>