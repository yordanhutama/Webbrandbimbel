<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$nama = $_POST['nama'];
$sekolah = $_POST['sklh'];
$telpon = $_POST['notlp'];

$conn = new mysqli("localhost", "root", "", "bigboss");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
$sql2 = " INSERT INTO `data-siswa`(`username`, `password`, `nama`, `sekolah_asal`, `no_telpon`) VALUES ('$username', '$password', '$nama', '$sekolah', '$telpon' )";

if ($conn->query($sql1) === TRUE) {
    echo '<a href="../login.html">selamat anda sudah terdaftar siswa bigboss</a>.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>