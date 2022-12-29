<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name">
            </li><br>
            <li>
                <label for="email">Email</label><br>
                <input type="text" name="email" id="email">
            </li><br>
            <li>
                <label for="address">Address</label><br>
                <input type="text" name="address" id="address">
            </li><br>
            <li>
                <label for="gender">Gender</label><br>
                <select name="gender" id="gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                
            </li><br>
            <li>
                <label for="position">Position</label><br>
                <input type="text" name="position" id="position">
            </li><br>
            <li>
                <label for="status">Status</label><br>
                <select name="status" id="status">
                    <option value="parttime">parttime</option>
                    <option value="fulltime">fulltime</option>
                </select>
            </li><br><br>

            
                <button type="submit" name="submit" class="btn btn-success">submit</button>
            
        </ul>
    </form>
</body>
</html>