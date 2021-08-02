<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Personal Page</title>
</head>
<body style="font-size:18px;font-family:Arial,Helvetica,sans-serif;padding:20px;">
    <?php
        if(isset($_COOKIE["email"]) == "" && isset($_COOKIE["pass"]) == ""){
            echo "<script>window.location.href = 'log.php'</script>";
        }
        include("db.php");
        $email = $_COOKIE["email"];
        $pass = $_COOKIE["pass"];
        $sql = "SELECT * FROM `db`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($email == $row["email"] && $pass == $row["password"]){
                  echo "<img src='".$row["file"]."' style='width:100px;height:80px;border-radius:50%;'><br>";
                  if($row["ver"] == "1"){
                    echo $row["fname"]. " " .$row["lname"] . "<a data-title='Verified account'><img style='width:20px;' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02Ljg5MSAxOS4wNGEyLjk5NyAyLjk5NyAwIDAxLTMuMTYyLTEuODI1bC0uMjc1LS42NjUtLjY2NS0uMjc1YTMgMyAwIDAxLTEuODI1LTMuMTYybC4wOTQtLjcxMy0uNDM4LS41NzFhMi45OTcgMi45OTcgMCAwMTAtMy42NTFsLjQzOC0uNTcxLS4wOTQtLjcxM2EyLjk5NyAyLjk5NyAwIDAxMS44MjUtMy4xNjJsLjY2NS0uMjc1LjI3NS0uNjY1QTMgMyAwIDAxNi44OTEuOTY3bC43MTMuMDk0LjU3MS0uNDM4YTIuOTk3IDIuOTk3IDAgMDEzLjY1MSAwbC41NzEuNDM4LjcxMy0uMDk0YTIuOTk3IDIuOTk3IDAgMDEzLjE2MiAxLjgyNWwuMjc1LjY2NS42NjUuMjc1YTMgMyAwIDAxMS44MjUgMy4xNjJsLS4wOTQuNzEzLjQzOC41NzFhMi45OTcgMi45OTcgMCAwMTAgMy42NTFsLS40MzguNTcxLjA5NC43MTNhMi45OTcgMi45OTcgMCAwMS0xLjgyNSAzLjE2MmwtLjY2NS4yNzUtLjI3NS42NjVhMyAzIDAgMDEtMy4xNjIgMS44MjVsLS43MTMtLjA5NC0uNTcxLjQzOGEyLjk5NyAyLjk5NyAwIDAxLTMuNjUxIDBsLS41NzEtLjQzOC0uNzEzLjA5NCIvPjxwYXRoIGZpbGw9IiMxZjZhZWQiIGQ9Ik03Ljc1NCAxNi45MDVhLjk5OS45OTkgMCAwMS43MzkuMTk4bC44OTkuNjlhMSAxIDAgMDAxLjIxNyAwbC44OTktLjY5YS45OTkuOTk5IDAgMDEuNzM5LS4xOThsMS4xMjQuMTQ4YTEgMSAwIDAwMS4wNTQtLjYwOGwuNDMzLTEuMDQ3YS45OTYuOTk2IDAgMDEuNTQxLS41NDFsMS4wNDctLjQzM2EuOTk5Ljk5OSAwIDAwLjYwOC0xLjA1NGwtLjE0OC0xLjEyNGEuOTk5Ljk5OSAwIDAxLjE5OC0uNzM5bC42OS0uODk5YTEgMSAwIDAwMC0xLjIxN2wtLjY5LS44OTlhLjk5OS45OTkgMCAwMS0uMTk4LS43MzlsLjE0OC0xLjEyNGExIDEgMCAwMC0uNjA4LTEuMDU0bC0xLjA0Ny0uNDMzYS45OTYuOTk2IDAgMDEtLjU0MS0uNTQxbC0uNDMzLTEuMDQ3YS45OTkuOTk5IDAgMDAtMS4wNTQtLjYwOGwtMS4xMjQuMTQ4YS45OTkuOTk5IDAgMDEtLjczOS0uMTk4bC0uODk5LS42OWExIDEgMCAwMC0xLjIxNyAwbC0uODk5LjY5YS45OTkuOTk5IDAgMDEtLjczOS4xOThMNi42MyAyLjk0NmExIDEgMCAwMC0xLjA1NC42MDhsLS40MzMgMS4wNDdhLjk5Ni45OTYgMCAwMS0uNTQxLjU0MWwtMS4wNDcuNDMzYS45OTkuOTk5IDAgMDAtLjYwOCAxLjA1NGwuMTQ4IDEuMTI0YS45OTkuOTk5IDAgMDEtLjE5OC43MzlsLS42OS44OTlhMSAxIDAgMDAwIDEuMjE3bC42OS44OTljLjE2MS4yMS4yMzMuNDc2LjE5OC43MzlsLS4xNDggMS4xMjRhMSAxIDAgMDAuNjA4IDEuMDU0bDEuMDQ3LjQzM2MuMjQ1LjEwMS40NC4yOTYuNTQxLjU0MWwuNDMzIDEuMDQ3YS45OTkuOTk5IDAgMDAxLjA1NC42MDhsMS4xMjQtLjE0OCIvPjwvZz48cGF0aCBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNNyAxMC4xbDIuMjk2IDIuNEwxMyA4Ii8+PC9nPjwvc3ZnPg=='></a>";
                    echo "<br><div style='border-bottom:1px solid #ccc;'></div>" .$row["email"];

                    }else{
                      echo $row["fname"]. " " .$row["lname"];
                      echo "<br><div style='border-bottom:1px solid #ccc;'></div>" .$row["email"];
                  }
              }
            }
          } else {
            echo "0 results";
          }
    ?>
    <form method="post">
        <button name="logout">Выйти</button>
    </form>
    <?php
        if(isset($_POST["logout"])){
            echo "<script>window.location.href = 'check.php'</script>";
        }
    ?>
    <style>
        body{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none; 
            user-select: none;
        }
        a:hover {
        color: red;
        position: relative;
        }
        a[data-title]:hover:after {
        content: attr(data-title);
        padding: 5px;
        margin-top: 10px;
        color: #f7f7f7;
        background: rgb(31, 106, 237);
        font-size:16px;
        position: absolute;
        left: 0;
        top: 100%;
        white-space: nowrap;
        z-index: 20px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 0px;
        border:1px solid rgb(31, 106, 237);
        font-weight: normal;
        font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</body>
</html>