<?php
class EditUser{
    function __construct(){
        include "koneksi.php";
    }
function edit(){
if (isset($_POST['submit'])) {
    $iduser = $_POST['iduser'];
    $namauser = $_POST['namauser'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);


    $insert = mysqli_query($mysqli, "update user set  
    namauser='$namauser',
    jk='$jk',
    tempatlahir='$tempatlahir',
    tgllahir='$tgllahir',
    status='$status',
    username='$username',
    password='$password'

    where iduser='$iduser'");
    if ($insert) {
        echo "<script>alert('proses edit berhasil');</script>";
        header('location:http://localhost/rmib/index.php?user');
    } else {
        echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
    }
}else{
    header('location:http://localhost/rmib/index.php?user');
}
}
}
?>

