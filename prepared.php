<?php 
require "conn.php";
$title = "title four";
$body = "body four";

 $insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");

 $insert->execute(array(
    ':title'=> $title,
    ':body'=> $body
 ));
//asi pilla automaticamente las variables 
 $insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (?,?)");

 $insert->execute(array(
    $title,
    $body
 ));