<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $result = $pdo -> prepare('UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id');
    $result -> bindParam(':name', $_POST['name']);
    $result -> bindParam(':email', $_POST['email']);
    $result -> bindParam(':password', $_POST['password']);
    $result -> bindParam(':id', $_GET['id']);
    $result -> execute();

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?v=users">';
}

if (!isset($_GET['id'])) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?v=users">';
}

$result = $pdo -> prepare('SELECT * FROM users WHERE id=:id');
$result -> bindParam(':id', $_GET['id']);
$result -> execute();
$user = $result -> fetch();

createUserForm("edit", $user['name'], $user['email'], $user['password']);

?>