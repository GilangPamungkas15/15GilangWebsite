<?php
include "database_conn.php";
$query = "SELECT * FROM barang WHERE item_id='" . $_GET["item_id"] . "'";
$result = mysqli_query($db_connect, $query);
$data_item = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Edit Data</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="edit_process.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail">ID Item</label>
                        <input type="text" name="item_id" class="form-control" value="<?php echo $data_item["item_id"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Nama Item</label>
                        <input type="text" name="nama_item" class="form-control" value="<?php echo $data_item["nama_item"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Jumlah Item</label>
                        <input type="text" name="jumlah_item" class="form-control" value="<?php echo $data_item["jumlah_item"] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Harga Item</label>
                        <input type="text" name="harga_item" class="form-control" value="<?php echo $data_item["item_id"] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>