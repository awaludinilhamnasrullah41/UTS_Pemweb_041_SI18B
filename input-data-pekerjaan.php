<?php
class DataPekerjaan{
    function __construct(){
        include "koneksi.php";
    }
function input(){
$idjenispekerjaan = $_POST['idjenispekerjaan'];
$jenispekerjaan = $_POST['jenispekerjaan'];
$keteranganpekerjaan = $_POST['keteranganpekerjaan'];
$pekerjaan = $_POST['pekerjaan'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$perintah = "SELECT COUNT(*) AS hasil FROM Jenispekerjaan WHERE idjenispekerjaan =
'$idjenispekerjaan'";

$hasil = mysql_query($perintah) or die (mysql_error());
$a = mysql_fetch_array($hasil);
if ($a[hasil]=="0") {
    $date = date_create($tgl);
    date_format($date, 'Y-m-d');
    if ($idjenispekerjaan=="" || $jenispekerjaan=="" || $keteranganpekerjaan=="" ||
    $pekerjaan=="" || $Jenis_kelamin=="" || $jurusan==""){
    echo"<SCRIPT> alert('Data anda belum lengkap!!');</SCRIPT>\n";
    echo"<SCRIPT>window.location.replace('Dashboard.php?inputjenispekerjaan');</S
    CRIPT>";
    }
    else{
        function simpan(){
    $cek = mysql_fetch_array(mysql_query("SELECT idjenispekerjaan FROM jenispekerjaan
    WHERE idjenispekerjaan ='$idjenispekerjaan'"));
    if (empty($cek['idjenispekerjaan']))
        { //memanggil fungsi cek apakah primary key sudah ada!
            mysql_query("insert into jenispekerjaan value
            ('$idjenispekerjaan','$jenispekerjaan','$keteranganpekerjaan','$pekerjaan','$Jenis_kelamin','$
            jurusan')");
          // $result = header('location:home.html');
            echo"<SCRIPT> alert('Data Sudah Disimpan!');</SCRIPT>\n";
            echo"<SCRIPT>window.location.replace('Dashboard.php?inputjenispekerjaan');</
            SCRIPT>";
            }
        }
    }
}
    
else {
    echo"<SCRIPT> alert('Data Yang Diinputkan $idjenispekerjaan Sudah
    Terdaftar!');</SCRIPT>\n";
    echo
    "<SCRIPT>window.location.replace('Dashboard.php?inputjenispekerjaan');</
    SCRIPT>";
}
}
}
?>