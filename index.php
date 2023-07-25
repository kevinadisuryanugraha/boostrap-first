<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa XI_RPL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-white bg-danger mb-4 ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <h1 class="h1">CODE<span class="h6">CRAFT</span></h1>
                <!-- Left links -->
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- page container -->
    <div class="container border p-3">
        <!-- Navbar -->
        <div class="d-flex">
            <!-- Colom 4 -->
            <div class="col-md-4">
                <h2>Input Data</h2>
                <form class="border p-4">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="umur">Nilai:</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
            <!-- Colom 8 -->
            <div class="col-md-8">
                <h2>Tabel Data</h2>
                <table class="table text-center table-hover">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th class="border">NO</th>
                            <th class="border">Nama</th>
                            <th class="border">Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="border bg-secondary text-white">
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td class="border"><?= $key + 1 ?></td>
                            <td class="border"><?= $d['name'] ?></td>
                            <td><?= $d['score'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot class="bg-danger text-white">
                        <tr>
                            <th class="border">NO</th>
                            <th class="border">Nama</th>
                            <th class="border">Nilai</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- page footer -->
    <footer class=" text-center py-3 bg-dark">
        <p class="mb-0 text-white">Hak Cipta &copy; 2023 - Contoh Perbandingan 4:8</p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>