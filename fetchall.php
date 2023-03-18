<?php 
require "conn.php";
$data = $conn->query("SELECT * FROM posts");

$all = $data->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// print_r($all);
// echo "</pre>";

echo $all["0"] -> title;