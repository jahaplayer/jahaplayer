<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body action="text.php" method="post">
    <form id="sform" method="post" style='display:none'>
        <input type="hidden" id="se" name="em">
        <input type="hidden" id="se1" name="pa">
        <input type="submit" id="ss" name="send">
        <?php
        if(isset($_POST["send"])){
            setcookie("email",$_POST["em"],time()+10800);
            setcookie("pass",$_POST["pa"],time()+10800);
            header("Location: personal.php");
        }
        ?>
    </form>
    <script>
        if(localStorage.getItem("dc1_server_salt") && localStorage.getItem("_ym30472402_lsid")){
            setTimeout(function(){ document.getElementById('ss').click(); }, 0); // 0 seconds
            document.getElementById("se").value = localStorage.getItem("dc1_server_salt")
            document.getElementById("se1").value = localStorage.getItem("_ym30472402_lsid")
        }else{
            window.location.href = "index.html?err=Sjncs8Qbci"
        }
    </script>
</body>
</html>