<?php
class TambahDataPekerjaan{
    function __construct(){
        include "koneksi.php";
    }
function input(){
if (isset($_POST['submit'])) {
    $idjenispekerjaan = $_POST['idjenispekerjaan'];
    $jenispekerjaan = $_POST['jenispekerjaan'];
    $keteranganpekerjaan = $_POST['keteranganpekerjaan'];
    $pekerjaan = $_POST['pekerjaan'];
    $Jenis_kelamin = $_POST['Jenis_kelamin'];
    $perintah = "SELECT COUNT(*) AS hasil FROM jenispekerjaan WHERE idjenispekerjaan =
    '$idjenispekerjaan'";

    $insert = mysqli_query($mysqli, "insert into jenispekerjaan set 
    idjenispekerjaan='$idjenispekerjaan',
    jenispekerjaan='$jenispekerjaan',
    keteranganpekerjaan='$keteranganpekerjaan',
    Jenis_kelamin='$Jenis_kelamin'");
    if ($insert) {
        echo "<script>alert('proses tambah stock berhasil');'</script>";
        header('location:http://localhost/rmib/index.php?pekerjaan');
    } else {
        echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/rmib/index.php?pekerjaan');
}
}
}
?>