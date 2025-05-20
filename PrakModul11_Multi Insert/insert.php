<?php
include "koneksi.php";
$stts = $_GET['status'];

if ($stts == "single") {
    $nama = $_POST['nama'];
    $sql = "INSERT INTO jurusan (nm_jurusan) VALUES ('".$nama."')";
    $a = $koneksi->query($sql);
    if ($a == true) {
        header("location:form_jurusan.php");
    }

} elseif ($stts == "identitas") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['noHP'];
    $jurusan = $_POST['jurusan'];
    $sql = "INSERT INTO identitas (NIM, nama, alamat, noHP, idjurusan) 
            VALUES ('".$nim."','".$nama."','".$alamat."','".$nomor."','".$jurusan."')";
    $a = $koneksi->query($sql);
    if ($a == true) {
        header("location:form_identitas.php");
    }

} elseif ($stts == "multi") {
    $r = $_POST['jumlah'];
    for ($i = 1; $i <= $r; $i++) {
        $NIM = $_POST['NIM'.$i];
        $keterangan = $_POST['keterangan'.$i];
        $sql = "INSERT INTO absensi (NIM, keterangan) 
                VALUES ('".$NIM."','".$keterangan."')";
        $a = $koneksi->query($sql);
    }
    ?>
    <script language="javascript">
        alert("Data Berhasil di Simpan");
        history.back(-1);
    </script>
    <?php
    // header("location:formabsensi.php");
}
?>
