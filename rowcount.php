<?php
require conn.php;
$rows = $conn -> query("SELECT * FROM posts");

if($data->rowCount() > 0) {
     while ($row = $rows->fetch(PDO::FETCH_ASSOC))
      { echo $row['body'] . "<br>"; 
    } 
} else {
    echo "no results yet";
} 