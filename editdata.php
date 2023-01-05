<?php
include_once('koneksi.php');

// echo var_dump($_POST);
// Kolom data di table
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jenkel'];
$foto = $_FILES['foto']['name'];

$no = $_POST['no'];

echo var_dump($_POST);

// echo "Selamat $nama , alamat anda $alamat , berjenis kelamin $jk No HP $nohp , dengan email $email <br>";

// echo '<img src="assets/'.$foto.'" class="card-img-top" alt="...">';

$query = "UPDATE data_siswa set `nama` = '$nama',`alamat` = '$alamat',`email` = '$email',`nohp` = '$nohp',`jenkel` = '$jk',`foto` = '$foto' where `no` = '$no'  ";

$update_data = mysqli_query($con, $query);

if ($update_data) {
    echo "<p>Data berhasil masuk</p>";
}else{
    echo "<p>Data gagal masuk</p>";
}

echo "<br>";

// echo var_dump($_FILES);

// $nama = $_FILES["foto"]["name"];

move_uploaded_file($_FILES["foto"]["tmp_name"], 'assets/'.$foto);

