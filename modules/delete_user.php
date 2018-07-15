<?php

if (!isset($_GET['id'])) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?v=users">';
}

$result = $pdo -> prepare('DELETE FROM users WHERE id=:id');
$result -> bindParam(':id', $_GET['id']);
$result -> execute();

echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?v=users">';

?>