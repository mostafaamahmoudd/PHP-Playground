<?php

require 'functions.php';
//require 'router.php';

$dsn = "mysql:host=localhost;port=3306;user=root;password=M@m2492003;dbname=demo;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo -> prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}