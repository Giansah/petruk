<?php 
    require 'functions.php';

    // ambil data di URL 
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query ("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // cek apakah tombol sudah di tekan atau belum 
    if( isset($_POST["submit"]) ) {




        // check apakah data berhasil diubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo"
                    <script>
                    alert('data berhasil diubah !!!');
                    document.location.href = 'index.php';
                    </script>
            ";
        } else {
            echo "Data gagal diubah !!";
            echo "<br>";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubah data mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?> " required>
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
            </li>
            <li>
                <button type="submit" name="submit">Ubah </button>
            </li>
        </ul>    
    </form>
</body>
</html>