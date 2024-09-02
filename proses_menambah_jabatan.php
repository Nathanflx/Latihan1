<?php
if ($_POST) {
    $nama_jabatan = $_POST['nama_kelas'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $tunjangan = $_POST['tunjangan'];

    if (empty($nama_jabatan)) {
        echo "<script>alert('Nama jabatan tidak boleh kosong');location.href='menambah_jabatan.html';</script>";
    } elseif (empty($gaji_pokok)) {
        echo "<script>alert('Gaji pokok tidak boleh kosong');location.href='menambah_jabatan.html';</script>";
    } elseif (empty($tunjangan)) {
        echo "<script>alert('Tunjangan tidak boleh kosong');location.href='menambah_jabatan.html';</script>";
    } else {
        include "koneksi.php";

        $insert = mysqli_query($conn, "INSERT INTO Tabel_Jabatan (Nama_jabatan, Gaji_pokok, Tunjangan) VALUES ('$nama_jabatan', '$gaji_pokok', '$tunjangan')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan jabatan');location.href='menambah_jabatan.html';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='menambah_jabatan.html';</script>";
        }
    }
}
?>
