<?php 
    require 'functions.php';

    // cek apakah tombol sudah di tekan atau belum 
    if( isset($_POST["submit"]) ) {




        // check apakah data berhasil di tamhakan atau tidak
        if( tambah($_POST) > 0 ) {
            echo"
                    <script>
                    alert('data berhasil ditambahkan !!!');
                    document.location.href = 'index.php';
                    </script>
            ";
        } else {
            echo "Data gagal di tambahkan !!";
            echo "<br>";
            echo mysqli_error($conn);
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah data mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>    
    </form>
</body>
</html>