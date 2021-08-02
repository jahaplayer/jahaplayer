<?php
    setcookie("email","",time()-3600);
    setcookie("pass","",time()-3600);
    header("location:log.php");
?>