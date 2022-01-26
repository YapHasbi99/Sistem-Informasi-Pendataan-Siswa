<?php
$nis=$_GET['nis'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM datasiswa WHERE nis ='$nis'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                           <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-2">
                                <input type="text" name="nis" value="<?=$data['nis']?>"class="form-control" id="inputEmail3" placeholder="Nis">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-2">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="kelas">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="gender" value="<?=$data['gender']?>" class="form-control">
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

						
                        
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>
                         

                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" id="inputPassword3" placeholder="no_telp">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tahun Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="thn_masuk" value="<?=$data['thn_masuk']?>" class="form-control" id="inputPassword3" placeholder="Tahun Masuk">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Jurusan</label>
                            <!--jurusan-->
                            <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="Jurusan" value="<?=$data['Jurusan']?>" class="form-control" id="inputPassword3" placeholder="Jurusan">
                            </div>
                        </div>
                        <!--asal sekolah-->
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Asal Sekolah</label>
                            <!--jurusan-->
                            <div class="col-sm-9">
                                 <input type="text" name="asal_sekolah" value="<?=$data['asal_sekolah']?>" class="form-control" id="inputPassword3" placeholder="Asal sekolah">
                            </div>
                        </div>
                        <!--Status-->
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="Status" value="<?=$data['Status']?>" class="form-control" id="inputPassword3" placeholder="Status">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-3">
                                <input type="file" class="custom-file-input" name="foto" value="<?=$data['foto']?>"class="form-control">
                                <img src="foto/<?= $data['foto']?>" width="120" height="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span>Update Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
 $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
  $gender=$_POST['gender'];
    $agama=$_POST['agama'];
  $no_telp=$_POST['no_telp'];
  $thn_masuk=$_POST['thn_masuk'];
    $Jurusan=$_POST['Jurusan'];
  $asal_sekolah=$_POST['asal_sekolah'];
    $Status=$_POST['Status'];
    
    //buat sql
    $sql="UPDATE datasiswa SET nama='$nama',kelas='$kelas',alamat='$alamat',gender='$gender',agama='$agama',no_telp='$no_telp',thn_masuk='$thn_masuk',Jurusan='$Jurusan',asal_sekolah='$asal_sekolah',Status='$Status'WHERE nis ='$nis'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



