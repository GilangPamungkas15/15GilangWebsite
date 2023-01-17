<?php
include "database_conn.php";
$item_id = $_GET["item_id"];

$query = "DELETE FROM barang WHERE item_id='" . $item_id . "'";

if (mysqli_query($db_connect, $query)) {
    $message = 3;
} else {
    $message = 4;
}

header("Location:index.php?message=" . $message . "");
