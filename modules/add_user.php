<?php

createUserForm("add", "", "", "");

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $result = $pdo -> prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
    $result -> bindParam(':name', $_POST['name']);
    $result -> bindParam(':email', $_POST['email']);
    $result -> bindParam(':password', $_POST['password']);
    $result -> execute();

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?v=users">';
}

?>