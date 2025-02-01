<?php
require 'read.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nip = $_GET ['nip'];
$nama = $_GET ['nama'];
$jabatan = $_GET ['jabatan'];
$email = $_GET ['email'];

mysqli_query($conn, "DELETE From tbl_pegawai where nip=$nip, nama=$nama, jabatan =$jabatan, email=$email");
header("location:read.php");
exit;
?>