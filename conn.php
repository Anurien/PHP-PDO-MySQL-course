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

while($row =$rows->fetch(PDO::FETCH_NUM)){
    var_dump($row);
    echo $row-> $row;
}
// PDO::FETCH_NUM returns enumerated array 
// PDO::FETCH_ASSOC returns associative array
// PDO::FETCH_BOTH - both of the above 
// PDO::FETCH_OBJ returns object 
// PDO::FETCH_LAZY allows all three (numeric associative and object) methots without memory overhead

//itera todas las variables de la consulta y las saca
foreach($rows as $row){
    echo $row['body'] . "<br>";
}