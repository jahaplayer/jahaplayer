<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin results random</title>
</head>
<body>
    <header></header>
    <section>
        <?php
            if(@$_GET["sub"] == "computer"){
                $servername = "localhost";
                $username = "admin";
                $password = "4221349n";
                $dbname = "asd";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div style='border:1px solid #e0e0e0;padding:20px;'><ol>";
                    while($row = $result->fetch_assoc()) {
                        if($row["subject"] == "Computer science"){
                            echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br>" .$row["a"]. "<br>" .$row["b"]. "<br>" .$row["c"]. "</div></div></li>";
                    }}
                    echo "</ol></div>";
                } else {
                    echo "0 results";
                }
            }
            if(@$_GET["sub"] == "math"){
                $servername = "localhost";
                $username = "admin";
                $password = "4221349n";
                $dbname = "asd";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div style='border:1px solid #e0e0e0;padding:20px;'><ol>";
                    while($row = $result->fetch_assoc()) {
                        if($row["subject"] == "Mathematics"){
                            echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br>" .$row["a"]. "<br>" .$row["b"]. "<br>" .$row["c"]. "</div></div></li>";
                    }}
                    echo "</ol></div>";
                } else {
                    echo "0 results";
                }
            }
            if(@$_GET["sub"] == "physic"){
                $servername = "localhost";
                $username = "admin";
                $password = "4221349n";
                $dbname = "asd";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div style='border:1px solid #e0e0e0;padding:20px;'><ol>";
                    while($row = $result->fetch_assoc()) {
                        if($row["subject"] == "Physics"){
                            echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br>" .$row["a"]. "<br>" .$row["b"]. "<br>" .$row["c"]. "</div></div></li>";
                    }}
                    echo "</ol></div>";
                } else {
                    echo "0 results";
                }
            }
            if(@$_GET["sub"] == "PM"){
                $servername = "localhost";
                $username = "admin";
                $password = "4221349n";
                $dbname = "asd";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div style='border:1px solid #e0e0e0;padding:20px;'><ol>";
                    while($row = $result->fetch_assoc()) {
                        if($row["subject"] == "Physics" || $row["subject"] == "Mathematics"){
                            echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br>" .$row["a"]. "<br>" .$row["b"]. "<br>" .$row["c"]. "</div></div></li>";
                    }}
                    echo "</ol></div>";
                } else {
                    echo "0 results";
                }
            }
            if(@$_GET["sub"] == "all"){
                $servername = "localhost";
                $username = "admin";
                $password = "4221349n";
                $dbname = "asd";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div style='border:1px solid #e0e0e0;padding:20px;'><ol>";
                    while($row = $result->fetch_assoc()) {
                            echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br>" .$row["a"]. "<br>" .$row["b"]. "<br>" .$row["c"]. "</div></div></li>";
                    }
                    echo "</ol></div>";
                } else {
                    echo "0 results";
                }
            }
        ?>
    </section>
    <style>
        body{
            font-family:Comic Sans MS, Comic Sans, cursive;
            font-size:16px;
            font-weight:400;
        }
        div::selection,li::selection,ol::selection,br::selection{
            background:none;
        }
    </style>
    <script>
            var items = ['#f3f2ef','#1c1c1c', '#fff']
            var item = items[Math.floor(Math.random()*items.length)]
            document.getElementsByTagName("body")[0].style = "background:"+item+";color:#11bb00"

    </script>
</body>
</html>