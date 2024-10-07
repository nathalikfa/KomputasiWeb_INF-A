<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = ""; // Password default untuk Laragon biasanya kosong
$dbname = "user_data"; // Ganti dengan nama database yang sudah dibuat

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'] . '@gmail.com';
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$job = $_POST['job'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];
$status = $_POST['status'];

// Query untuk memasukkan data
$sql = "INSERT INTO data_diri (name, email, hp, alamat, job, gender, hobby, status)
VALUES ('$name', '$email', '$hp', '$alamat', '$job', '$gender', '$hobby', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>