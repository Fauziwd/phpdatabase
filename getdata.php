<?php
include_once('koneksi.php');

$id = $_POST['id'];
$ambil_data = mysqli_query($con, "select * from `data_siswa` where `no` = '$id'");

$data = mysqli_fetch_assoc($ambil_data);
// echo var_dump($data);


