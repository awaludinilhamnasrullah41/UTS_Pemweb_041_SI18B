<?php
include "koneksi.php";
if(isset($_GET['idjenispekerjaan'])){
$query = mysqli_query ($conn,"Select * FROM jenispekerjaan where idjenispekerjaan='$_GET[idjenispekerjaan]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}
?>
      <!-- Static Table Start -->
      <div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Soal Tes
        </h1>
    </div>
</div>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');">Tambah Soal</a>
    <div class="modal fade" id="modal-user-settings" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title"></i>Tambah Pekerjaan</h3>
                </div>
                <!-- END Modal Header -->
                
                <!-- Modal Body -->
                <div class="modal-body">
                    <form action="user/prosestambah.php" method="post" >
                        <div class="form-group">
                            <label >ID Pekerjaan</label>
                            <div >
                                <input type="text" name="idpekerjaan" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Pekerjaan</label>
                            <div >
                            <input type="text" name="jenispekerjaan" value="" class="form-control" required>
                            </div>
                        </div>
                        </div>
                        <label>Keterangan Pekerjaan</label>
                        <div class="form-group">
                            <div class="form-inline">
                            <input type="text" name="keteranganpekerjaan" value="" class="form-control" required>
                            </div>
                        </div>
                        <label>Pekerjaan</label>
                        <div class="form-group">
                            <div class="form-inline">
                            <input type="text" name="pekerjaan" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div >
                                <select name="jk" class="form-control">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div >
                                <button type="submit" name="submit" class="btn btn-sm btn-primary">Tambah Pekerjaan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Modal Body -->
            </div>
        </div>
    </div>
    <?php
        include ('koneksi.php');
                $tampil = mysqli_query($mysqli, "select * from jenispekerjaan");
                $no = 1;
                while ($hasil = mysqli_fetch_array($tampil)) {
                    ?>
                    <tr>
                        <td width="20px" class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $hasil['idjenispekerjaan'];?></td>
                        <td class="text-center"><?php echo $hasil['Jenispekerjaan'];?></td>
                        <td class="text-center"><?php echo $hasil['keteranganpekerjaan'];?></td>
                        <td class="text-center"><?php echo $hasil['pekerjaan'];?></td>
                        <td class="text-center"><?php echo $hasil['Jenis_Kelamin'] == 'laki-laki' ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <!--<td class="text-center"></td>-->
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings<?php echo $hasil['idjenispekerjaan'];?>').modal('show');"><i class="fa fa-edit"></i></a>

                            <a onclick="return confirm('apakah anda yakin ingin menghapus data? ');" href="pekerjaan/proseshapuspekerjaan.php?idjenispekerjaan=<?php echo $hasil['idjenispekerjaan']; ?>" title="Delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <div class="modal fade" id="modal-user-settings<?php echo $hasil['idjenispekerjaan'];?>" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h3 class="modal-title"></i>Edit Pekerjaan</h3>
                            </div>
                            <!-- END Modal Header -->

                            <!-- Modal Body -->
                            <br>
                            <div class="modal-body">
                                <form action="pekerjaan/proseseditpekerjaan.php" method="post" class="form-bordered">
                                    <input type="hidden" name="idjenispekerjaan" value="<?php echo $hasil['idjenispekerjaan']; ?>">
                                    <div class="form-group">
                                        <label >ID Pekerjaan</label>
                                        <div >
                                            <input type="text" name="idjenispekerjaan" value="<?php echo $hasil['idjenispekerjaan']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <label >Jenis Pekerjaan</label>
                                    <div class="form-group">    
                                        <div >
                                            <input type="text" name="Jenispekerjaan" value="<?php echo $hasil['Jenispekerjaan']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label >Keterangan Pekerjaan</label>
                                        <div >
                                            <input type="text" name="keteranganpekerjaan" value="<?php echo $hasil['keteranganpekerjaan']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label >Pekerjaan</label>
                                        <div >
                                            <input type="text" name="pekerjaan" value="<?php echo $hasil['pekerjaan']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div >
                                            <select name="Jenis_Kelamin" class="form-control">
                                                <option <?php if($hasil['Jenis_Kelamin']=='laki-laki'){echo "selected"; } ?> value="laki-laki">Laki-laki</option>
                                                <option <?php if($hasil['Jenis_Kelamin']=='perempuan'){echo "selected"; } ?> value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div >
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary">Edit Pekerjaan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Modal Body -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- END Datatables Content -->
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- END User Settings -->