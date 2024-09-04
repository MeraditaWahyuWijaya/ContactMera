<?php
$servername = "localhost";
$username = "root"; // Ubah sesuai dengan username database Anda
$password = ""; // Ubah sesuai dengan password database Anda
$dbname = "ContactMera";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $conn->real_escape_string($_POST['nama']);
    $nim = $conn->real_escape_string($_POST['nim']);
    $kelas = $conn->real_escape_string($_POST['kelas']);
    $email = $conn->real_escape_string($_POST['email']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $saran = $conn->real_escape_string($_POST['saran']);

    // SQL untuk memasukkan data
    $sql = "INSERT INTO ContactMera (nama, nim, kelas, email, gender, saran)
    VALUES ('$nama', '$nim', '$kelas', '$email', '$gender', '$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
