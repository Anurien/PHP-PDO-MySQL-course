<?php

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->query("INSERT INTO posts (title, body) VALUES ('javascript', 'body
    abot js')");
    $conn->query("INSERT INTO posts (title, body) VALUES ('php','body abot php')");
    $conn->commit();
} catch(Exception $e) {
    $conn ->rollback();
    echo $e -> getmessage();

}