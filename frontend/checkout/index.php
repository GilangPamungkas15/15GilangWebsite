<?php
include 'database_conn.php';
$query = "SELECT * FROM barang limit 200";
$result = mysqli_query($db_connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Data Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Miracle Lamp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../ecommerce.php">Kembali</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Tentang</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Toko</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Semua Produk</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Item Favorit</a></li>
                            <li><a class="dropdown-item" href="#!">Baru Datang</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Miracle Lamp</h1>
                <p class="lead fw-normal text-white-50 mb-0">Illuminating Life With Miracles</p>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="float-start mb-4">
                    <h2>Data Keranjang</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID Item</th>
                            <th scope="col">Nama Item</th>
                            <th scope="col">Jumlah Item</th>
                            <th scope="col">Harga Item</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0) : ?>
                            <?php while ($data_item = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <th scope="row"><?php echo $data_item['item_id'] ?></th>
                                    <td><?php echo $data_item['nama_item'] ?></td>
                                    <td><?php echo $data_item['jumlah_item'] ?></td>
                                    <td><?php echo $data_item['harga_item'] ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" rowspan="1" headers="">Tidak Ada Data Ditemukan!</td>
                            </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>