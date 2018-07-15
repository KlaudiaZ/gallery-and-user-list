<?php

$pdo = new PDO("mysql:host=localhost;dbname=id6500857_users_and_gallery;encoding=utf8", "id6500857_example_db", "a3B82f");
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>