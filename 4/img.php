<?php
    include("condb.php");
    $sql1 = "SELECT * FROM `base`";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $myfile1 = fopen($row["file"], "r");
                echo "<img src='".fread($myfile1, filesize($row['file']))."'>";
            }
          } else {
            echo "0 results";
          }
?>