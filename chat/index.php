<?php
    if(isset($_COOKIE["email"]) == "" && $_COOKIE["pass"] == ""){
        header("Location:log.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users!</title>
</head>
<body>
    <?php
        @$conn = new mysqli("localhost","admin","4221349n","asd");
        $sql = "SELECT email, ver FROM `db`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($row["ver"] == "1"){
                  echo '<div style="margin-bottom:5px;"><a href="chat.php?user='.$row["email"].'">'.$row["email"].'</a><a data-title="Подтверждено"><img src="https://yastatic.net/s3/web4static/_/v2/static/media/achievement-verified.f3d11844.svg" style="width:15px;"></a></div>';
              }else{
                  echo '<div style="margin-bottom:5px;"><a href="chat.php?user='.$row["email"].'">'.$row["email"].'</a></div>';
              }
            }
          } else {
            echo "0 results";
          }
    ?>
    <style>
        body{
            padding:20px;
            margin:0;
            font-size:18px;
            font-family:Arial, Helvetica,sans-serif;
        }
        div::selection,br::selection,img::selection{
            background:none;
        }
        a{
            text-decoration:none;
            color:#444;
        }
        a:hover{
            color:#4f84f4;
        }
        a[data-title]:hover:after {
        content: attr(data-title);
        padding: 5px;
        margin-top: 5px;
        color: #f7f7f7;
        background: rgb(31, 106, 237);
        font-size:12px;
        position: inherit;
        top: 100%;
        white-space: nowrap;
        z-index: 20px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 0px;
        border:1px solid rgb(31, 106, 237);
        font-weight: lighter;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</body>
</html>