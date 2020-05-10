<?php

class DataProfesi{
    function __construct(){
        include "koneksi.php";
    }
    function input(){
$idprofesi = $_POST['idprofesi'];
$profesi = $_POST['profesi'];
$jenispekerjaan = $_POST['jenispekerjaan'];
$Jenis_kelamin = $_POST['Jenis_kelamin'];
if ($idprofesi=="" || $profesi=="" || $jenispekerjaan=="" || $Jenis_kelamin=="" )
{
    echo"<SCRIPT> alert('Data anda belum lengkap!');</SCRIPT>\n";
    echo"<SCRIPT>window.location.replace('index.php?profesi=inputprofesi');</SCRIPT>";
}else{
    function simpan(){
$cek = mysql_fetch_array(mysql_query("SELECT idprofesi FROM profesi WHERE
idprofesi ='$idprofesi'"));
if (empty($cek['idprofesi']))
    {
    mysql_query("insert into profesi value ('$idprofesi','$profesi',
    '$jenispekerjaan','$Jenis_kelamin')");
    echo"<SCRIPT> alert('Data Sudah Disimpan!');</SCRIPT>\n";
    echo"<SCRIPT>window.location.replace('index.php?profesi=inputprofesi');</
    SCRIPT>";
    }
    else{
    $result ="Gagal!, data Sudah ada.";}}
        }
    }
}      
?>