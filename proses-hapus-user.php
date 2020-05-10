<?php
class DeleteUser{
    function __construct(){
        include "koneksi.php";
    }
function delete(){
$iduser = $_GET['id'];
$delete = mysqli_query($mysqli, "delete from user where iduser='$iduser' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='http://localhost/rmib/index.php?user'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
    }
}
}
?>
