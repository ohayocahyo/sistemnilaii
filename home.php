    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>DASHBOARD</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php
        session_start();
        include "db_conn.php";

        if (isset($_SESSION['nim'])) {
            $nim = $_SESSION['nim'];
            $sql = "SELECT *  FROM tb_nilai WHERE  nim ='$nim' ";


            $query = mysqli_query($conn, $sql);

            if (!$query) {
                die('SQL Error: ' . mysqli_error($conn));
            }

            echo ' <h1>Hello, ' . $_SESSION['namamhs'] . '</h1>
            <h2>Nilai Mahasiswa</h2>
            <table class="center" border="1">
    <thead>
        <tr>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>';

            while ($row = mysqli_fetch_assoc($query)) {
                echo '<tr>
        <td>' . $row['matkul'] . '</td>
        <td>' . $row['nilai'] . '</td>
    </tr>';
            }
            echo '
</tbody>
</table>';
        ?>
            <a href="logout.php"> LOGOUT </a>
    </body>

    </html>



    <?php
        } else {
            header("Location: index.php");
            exit();
        }
    ?>