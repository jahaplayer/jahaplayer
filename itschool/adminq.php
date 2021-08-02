<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>admin Q:</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "admin", "4221349n", "asd");
        $sql = "SELECT `email`, `password`, `ver` FROM `db`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row["email"] == @$_COOKIE["ev"] && $row["password"] == @$_COOKIE["pa"]){
                    if($row["ver"] == "0"){
                        header("Location:index.html");
                    }
                }
            }
        } else {
            echo "0 results";
        }
    ?>
    <header>
        <div id="head">
            <div style='float: left;'><img src="https://testlio.com/wp-content/uploads/testlio-logo-blue.png"></div>
            <span class="fa fa-envelope" style="color:#4f84f4;" id="ic"></span>&nbsp;<a href="mailto:info@asdix.com">info@asdix.com</a><br>
            <span class="fa fa-phone-alt" style="color:#4f84f4;" id="ic"></span><a href="tel:998913688054">&nbsp;+998(91) 368-80-54</a>
        </div>
    </header>
    <section class="text-center">
        <form method="post" autocomplete="off" onsubmit="return ques.value!=''">
            <div><input type="text" name="ques" placeholder="question"></div>
            <div><input type="text" name="ans" placeholder="answer"></div>
            <div><input type="text" name="sub" placeholder="subject" id="subjects"></div>
            <div><input type="text" name="a" placeholder="option a:"></div>
            <div><input type="text" name="b" placeholder="option b:"></div>
            <div><input type="text" name="c" placeholder="option c:"></div>
            <div><button type="submit" name="send">Submit</button></div>
        </form>
        <script>
            document.getElementById("subjects").addEventListener("input", function(){
                var val = this.value
                if(val[0] == "m" || val[0] == "M"){
                    this.value = "Mathematics"
                }
                else if(val[0] == "F" || val[0] == "P" || val[0] == "f" || val[0] == "p"){
                    this.value = "Physics"
                }
                else if(val[0] == "k" || val[0] == "K" || val[0] == "C" || val[0] == "c"){
                    this.value = "Computer science"
                }                
            })
        </script>
    </section>
    <?php
    if(isset($_POST["send"])){
        $servername = "localhost";
        $username = "admin";
        $password = "4221349n";
        $dbname = "asd";
        $q = $_POST["ques"];
        $ans = $_POST["ans"];
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $sub = $_POST["sub"];
        $admin = $_COOKIE["email"];
        @$conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "INSERT INTO `ques` VALUES ('NULL', '$q', '$ans', '$a' , '$b', '$c', '$admin', '$sub')";

        if ($conn->query($sql) === TRUE) {
            
          } else {
            
          }
    }
    ?>
    <style>
        body{
            font-family:Arial,Helvetica,sans-serif;
            font-size:18px;
        }
        section{
            padding:20px;
        }
        input{
            border:1px solid #e0e0e0;
            width:30%;
            height:50px;
            margin-bottom:10px;
            outline:0;
            padding:0 15px;
            font-size:16px;
            color:#444;
            font-weight:400;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            border-radius:0.8rem;
        }
        button{
            border:1px solid #4f84f4;
            border-radius:0.8rem;
            background:#4f84f4;
            color:#fff;
            width:30%;
            height:50px;
        }
        header #head{
            padding:15px 15%;
            background: #fff;
            box-shadow: 0 0 7px #e0e0e0;
            font-size: 16px;
            font-weight: 400;
            color: #444;;
            max-height: 70px;
            text-align:right;
            font-family:Comic Sans MS, Comic Sans, cursive;
        }
        #head img{
            width: 100px;
        }
        a{
            text-decoration:none;
            color:#444;

        }
        @media (max-width:1200px) {
            #head a{
                font-size:16px;
            }
            #head span{
                font-size:14px;
            }
            #head{
                font-size: 16px;
            }
        }
        @media (max-width:1000px) {
            #head a{
                font-size:15px;
            }
            #head span{
                font-size:13px;
            }
            #head{
                font-size: 15px;
            }
        }
        @media (max-width:900px) {
            #head a{
                font-size:14px;
            }
            #head span{
                font-size:12px;
            }
            #head{
                font-size: 14px;
            }
        }
        @media (max-width:800px) {
            #head a{
                font-size:13px;
            }
            #head span{
                font-size:11px;
            }
            #head{
                font-size: 13px;
            }
        }
        @media (max-width:700px) {
            #head a{
                font-size:10px;
            }
            #head span{
                font-size:9px;
            }
            #head{
                font-size: 10px;
            }
            #head img{
                width:50px;
            }
        }
    </style>
</body>
</html>