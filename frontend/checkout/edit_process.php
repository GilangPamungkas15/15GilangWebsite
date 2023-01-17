<?php
include "database_conn.php";

if (count($_POST) > 0) {
    $item_id = $_POST["item_id"];
    $nama_item = $_POST["nama_item"];
    $jumlah_item = $_POST["jumlah_item"];
    $harga_item = $_POST["harga_item"];

    $query =
        "UPDATE barang set item_id='" .
        $item_id .
        "', nama item='" .
        $nama_item .
        "', jumlah item='" .
        $jumlah_item .
        "', harga item='" .
        $harga_item .
        "' WHERE id_item='" .
        $id_item .
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}
header("Location:index.php?message=" . $message . "");
