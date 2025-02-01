<?php
require 'read.php'; 
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tbl_pegawai";
$result = mysqli_query($conn, $sql); 

if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['name'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];


    $query = "INSERT INTO tb_mhs (nip, nama, jabatan, email) VALUES ('$nimp', '$nama','$jabatan', '$email')";
    mysqli_query($conn, $query); 
    header("Location: index.php"); 
    
}
