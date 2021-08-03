<?php 
        $sq1 = "SELECT * FROM `db`";
        $result = $conn->query($sq1);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                    $sql = "UPDATE `db` SET fname='Jahongir' WHERE id=".$row['id'];
                }
            }
        } else {
            echo "0 results";
        }
        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }
    ?>