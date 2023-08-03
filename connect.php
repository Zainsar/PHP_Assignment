<?php
$connect = mysqli_connect("localhost", "root", "", "PHP-ASSIGNMENT");
if (!$connect) {
    die("Query failed");
} else {
    echo "Connected";
}

?>