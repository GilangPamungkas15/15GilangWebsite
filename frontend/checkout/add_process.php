<?php

include "database_conn.php";

if(count($_POST) > 0){
    $item_id = $_POST["item_id"];
    $nama_item = $_POST["nama_item"];
    $jumlah_item = $_POST["jumlah_item"];
    $harga_item = $_POST["harga_item"];

    $query = "INSERT INTO barang (item_id, nama_item, jumlah_item, harga_item) VALUES ('$item_id', '$nama_item', '$jumlah_item', '$harga_item')";

    if(mysqli_query($db_connect, $query)){
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");
?>