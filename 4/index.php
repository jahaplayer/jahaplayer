<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form method="post" class="text-center" autocomplete="off" onsubmit="return email.value!=''">
        <div><input type="email" name="email" id="mail" placeholder="Email"></div>
        <div><input type="password" name="pass" id="pass" placeholder="Password"></div>
        <div><input type="text" name="text" id="txt" placeholder="Image"></div>
        <div><button type="submit" name="send">Submit</button></div>
    </form>
    <style>
        body{
            padding:20px;
            font-size:16px;
            font-family:Arial, Helvetica, sans-serif;
        }
        input{
            border: 1px solid #e0e0e0;
            border-radius:32px;
            color:#444;
            outline:0;
            width:350px;
            height:50px;
            padding: 0 15px;
            margin-bottom:10px;
            font-size:16px;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        button{
            border:1px solid #4f84f4;
            border-radius:350px;
            height:50px;
            width:350px;
            outline:0;
            color:#fff;
            background:#4f84f4;
            font-size:16px;
            font-family:Arial,Helvetica,sans-serif;
            font-weight:bold;
        }
    </style>
</body>
</html>
<?php
    if(isset($_POST["send"])){
        include("condb.php");
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $text = $_POST["text"];
        $file = "file.asdix";
        $myfile = fopen($file, "w") or die("Unable to open file!");
        $txt = $text;
        fwrite($myfile, $text);
        $sql = "INSERT INTO `base` VALUES ('NULL', '$email', '$pass', '0', '' , '', '$file')";
        if ($conn->query($sql) === TRUE) {
            
          }
        $sql1 = "SELECT * FROM `base`";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($row["email"] == $email && $row["password"] == $pass){
                $myfile1 = fopen($row["file"], "r");
                echo "<img src='".fread($myfile1, filesize($row['file']))."'>";
              }
            }
          } else {
            echo "0 results";
          }
        fclose($myfile);
    }
?>