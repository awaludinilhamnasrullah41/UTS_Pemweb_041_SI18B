<?php
class TambahUser{
    function __construct(){
        include "koneksi.php";
    }
function input(){
if (isset($_POST['submit'])) {
    $namauser = $_POST['namauser'];
    $jk = $_POST['jk'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $level = $_POST['level'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = mysqli_query($mysqli, "insert into user set 
    namauser='$namauser',
    jk='$jk',
    tempatlahir='$tempatlahir',
    tgllahir='$tgllahir',
    level='$level',
    username='$username',
    password='$password'");
    if ($insert) {
        echo "<script>alert('proses tambah user berhasil');'</script>";
        header('location:http://localhost/pkl/index.php?user');
    } else {
        echo "<script>alert('proses tambah user gagal');window.history.go(-1);</script>";
    }
} else {
    header('location:http://localhost/rmib/index.php?user');
}
}
}
?>

