<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='sign_up.html';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='sign_up.html';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='sign_up.html';</script>";
    } else {
        include "koneksi.php";

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $insert = mysqli_query($conn, "INSERT INTO tabel_pegawai (Nik, Nama, Alamat, Jenis_kelamin, No_tlp, Jabatan, Username, Password) VALUES ('$nik', '$nama', '$alamat', '$gender', '$no_tlp', '$jabatan', '$username', '$hashed_password')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses mendaftar');location.href='sign_up.html';</script>";
        } else {
            echo "<script>alert('Gagal mendaftar');location.href='sign_up.html';</script>";
        }
    }
}
?>
