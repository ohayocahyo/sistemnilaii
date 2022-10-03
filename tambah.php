<head>

  <title>Tambah Data</title>

  <link rel="stylesheet" href="style.css">

</head>

<h2>Tambah Data</h2>

<form action=" " method="post">
  <label>Mata Kuliah</label>
  <input type="text" name="matkul"><br>

  <label>NIM</label>
  <input type="text" name="nim"><br>

  <label>Nilai</label>
  <input type="text" name="nilai"><br>

  <button type="submit" name="proses">Simpan</button>
</form>


<?php
include "db_conn.php";
if (isset($_POST['proses'])) {
  mysqli_query($conn, "insert into tb_nilai set
  matkul = '$_POST[matkul]',
  nim = '$_POST[nim]',
  nilai = '$_POST[nilai]'");

  echo "Data telah tersimpan";
}

?>