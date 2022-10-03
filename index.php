<!DOCTYPE html>

<html>

<head>

    <title>Cek Nilai</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form action="nilai.php" method="post">

        <h2>Cek Nilai</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>NIM</label>

        <input type="text" name="nim" placeholder="NIM"><br>

        <button type="submit">Cek</button>


    </form>
    <a href="tambah.php"> Tambah Data </a>

</body>

</html>