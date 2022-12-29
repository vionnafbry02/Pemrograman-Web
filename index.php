<?php
    require 'functions.php';
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body{
            font-family: 'Roboto', sans-serif;
        }

        .table{
            table-layout: auto;
            width: 600px;
        }
    </style>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>
    <a href="tambah.php" class="btn btn-secondary">Tambah data</a>
    <br><br>
    <table border="1" class="table table-dark table-striped">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        <!-- print data from result -->
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["address"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["position"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td>
                <a href="hapus.php?id=<?= $row["id"]; ?>"" class="button">Hapus</a>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
</body>
</html>