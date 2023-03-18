<?php

require "conn.php";

$data = $conn -> query("SELECT * FROM posts");
//te saca la columna seleccionada
$one =$data-> fetchColumn(1);
echo $one;