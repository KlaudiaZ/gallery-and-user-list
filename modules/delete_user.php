<?php

if (!isset($_GET['id'])) {
    header('location: index.php?v=users');
}

$result = $pdo -> prepare('DELETE FROM users WHERE id=:id');
$result -> bindParam(':id', $_GET['id']);
$result -> execute();

header('location: index.php?v=users');

?>