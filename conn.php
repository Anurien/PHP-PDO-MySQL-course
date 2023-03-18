<?php

try{
    $host = "localhost";
    $dbname = "blogpost";
    $user = "root";
    $password = "";

    $conn = new PDO ("mysql:host=$host;dbname=$dbname",$user,$password);
    $conn -> setAttribute(PDO:: ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);


} catch(PDOExcepcion $e){
    echo $e -> getMessage();

}
//saca el titulo. el fetch solo saca un resultado
$rows = $conn -> query("select title form post");
while($row =$rows->fetch()){
    echo $row['title']."<br>";
}