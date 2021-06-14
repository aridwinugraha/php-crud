<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa     =$_POST['id_siswa'];
$nisn           = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_siswa = '$nama_siswa', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
