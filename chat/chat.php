<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Tchat</title>
</head>
<body>
    <header>
        <?php
            @$conn = new mysqli("localhost","admin","4221349n","asd");  
            $sql = "SELECT * FROM `chat`";
            $user = $_GET["user"];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                if($user == $_COOKIE["email"]){
                    echo "<div style='color:#11bb00;margin-bottom:20px;'>Избранное</div>";
                }else{
                echo "<div style='color:#11bb00;margin-bottom:20px;'>Chat with : ".$user."</div>";}
                while($row = $result->fetch_assoc()) {
                    if($row["email"] == $_COOKIE["email"] && $user == $row["x"] || $row["email"] == $user){
                        if($row["email"] == $_COOKIE["email"]){
                            echo "<div id='cff' style='padding-left:50px'>";
                            echo "<style>#cff{color:#4f84f4}</style>";
                        }else{
                            echo "<div id='vff'>";
                            echo "<style>#vff{color:#ff0088}</style>";
                        }
                            echo "<div style='margin-bottom:10px;'>". $row["txt"]. "<span style='font-size:8px;color:#ccc'> ".$row["time"]."</span></div></div> ";
                }                
            }
              } else {
                echo "Say Hello!";
              }
        ?>
    </header>
    <section>
        <form method="post">
            <div>
                <input type="text" name="txt" placeholder='Type message...'>
                <button type="submit" name="send" class="fa fa-paper-plane"></button>
            </div>
        </form>
    </section>
    <?php
        if(isset($_POST["send"])){
            $email = $_COOKIE["email"];
            $txt = $_POST["txt"];
            if($email == ""){
                $email = "Гость";
            }
            $x = $_GET["user"];
            $time = date("h:i");;
            @$conn = new mysqli("localhost","admin","4221349n","asd");
            $sql = "INSERT INTO `chat` VALUES ('NULL', '$email', '$txt','$time','$x')";
            if ($conn->query($sql) === TRUE) {
                header("Location:chat.php?user=".$x);
              } else {
                
              }
        }
    ?>
    <style>
        *{
            font-family:Arial,Helvetica,sans-serif;
            font-size:18px;
            font-weight:400;
        }
        header{
            padding:40px;
        }
        input{
            border:1px solid #e0e0e0;
            outline:0;
            width:400px;
            padding:0 15px;
            font-size:16px;
            font-weight:400;
            color:#444;
            font-family:Arial,Helvetica,sans-serif;
            height:40px;
            border-radius:0px;
        }
        section{
            padding:20px;
        }
        button{
            border:1px solid #fff;
            background:#4f84f4;
            color:#fff;
            outline:0;
            height:40px;
            font-weight:lighter;
            width:100px;
            font-size:16px;
            border-bottom:1px solid #4f84f4;
            border-radius:0px;
        }
    </style>
</body>
</html>