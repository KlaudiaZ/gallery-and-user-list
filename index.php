<?php

include ("index.html");

if (array_key_exists("v", $_GET)) {
    $module = $_GET["v"];
} else {
    $module = "gallery";
}

$moduleDir = "modules/" . $module . ".php";

if (file_exists($moduleDir)) {
    include ($moduleDir);
} else {
    header ("HTTP/1.1 404 Not Found");
    echo "<h1>404 Page Not Found</h1>";
}

?>