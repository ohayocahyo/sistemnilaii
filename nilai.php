<?php
session_start();
include "db_conn.php";

if (isset($_POST['nim'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$nim = validate($_POST['nim']);

if (empty($nim)) {
    header("Location: index.php?error=Harap masukkan NIM");
    exit();
}


$sql = "SELECT * FROM tb_mhs WHERE nim='$nim' ";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['nim'] === $nim) {
        echo "Logged In";
        $_SESSION['nim'] = $row['nim'];
        $_SESSION['namamhs'] = $row['namamhs'];



        header("Location: home.php");
        exit();
    } elseif (mysqli_num_rows($result) === 0) {
        header("Location: index.php?error=Harap masukkan NIM yang benar");
        exit();
    }
} else {
    header("Location: index.php?error=Harap masukkan NIM yang benar");
    exit();
}
