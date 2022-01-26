x`<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						 <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">NIS</label>
                            <div class="col-sm-3">
                                <input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="Inputkan Nis" required="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="kelas" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="X RPL 1">X RPL 1</option>
                                    <option value="X RPL 2">X RPL 2</option>
                                    <option value="X RPL 3">X RPL 3</option>
                                    <option value="X RPL 4">X RPL 4</option>
                                    <option value="X TKJ 1">X TKJ 1</option>
                                    <option value="X TKJ 2">X TKJ 2</option>
                                    <option value="X TKJ 3">X TKJ 3</option>
                                    <option value="X TKJ 4">X TKJ 4</option>
                                    <option value="X Multimedia 1">X Multimedia 1</option>
                                    <option value="X Multimedia 2">X Multimedia 2</option>
                                    <option value="X Multimedia 3">X Multimedia 3</option>
                                    <option value="X Multimedia 4">X Multimedia 4</option>
                                    <option value=""></option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XI RPL 3">XI RPL 3</option>
                                    <option value="XI RPL 4">XI RPL 4</option>
                                    <option value="XI TKJ 1">XI TKJ 1</option>
                                    <option value="XI TKJ 2">XI TKJ 2</option>
                                    <option value="XI TKJ 3">XI TKJ 3</option>
                                    <option value="XI TKJ 4">XI TKJ 4</option>
                                    <option value="XI Multimedia 1">XI Multimedia 1</option>
                                    <option value="XI Multimedia 2">XI Multimedia 2</option>
                                    <option value="XI Multimedia 3">XI Multimedia 3</option>
                                    <option value="XI Multimedia 4">XI Multimedia 4</option>
                                    <option value=""></option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL 2">XII RPL 2</option>
                                    <option value="XII RPL 3">XII RPL 3</option>
                                    <option value="XII RPL 4">XII RPL 4</option>
                                    <option value="XII TKJ 1">XII TKJ 1</option>
                                    <option value="XII TKJ 2">XII TKJ 2</option>
                                    <option value="XII TKJ 3">XII TKJ 3</option>
                                    <option value="XII TKJ 4">XII TKJ 4</option>
                                    <option value="XII Multimedia 1">XII Multimedia 1</option>
                                    <option value="XII Multimedia 2">XII Multimedia 2</option>
                                    <option value="XII Multimedia 3">XII Multimedia 3</option>
                                    <option value="XII Multimedia 4">XII Multimedia 4</option>


                                </select>
                            </div>
                        </div> 

						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="gender" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" class="form-control" id="inputPassword3" placeholder="Inputkan Nomor Telepon" required="">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="thn_masuk" class="col-sm-3 control-label">Tahun Masuk</label>
                            <div class="col-sm-2">
                                <select name="thn_masuk" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                </select>
                            </div>  
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="Jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="Jurusan" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="RPL">RPL</option>
                                    <option value="Multimedia">Multimedia</option>
                                </select>
                            </div>
                        </div> 
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_sekolah" class="form-control" id="inputPassword3" placeholder="Inputkan Asal Sekolah">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Profil</label>
                            <div class="col-sm-3">
                            <input type="file" class="custom-file-input" name="foto" onchange="initFile()" class="form-control" >
                            </div>
                        </div>

                            <div class="form-group">
                            <label for="Status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2">
                                <select name="Status" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Mampu">Mampu</option>
                                    <option value="Tidak Mampu">Tidak Mampu</option>
                                    </select>
                            </div>  
                        </div>
                            
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Siswa</button>
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
<script type="text/javascript">
    function initFile()
    {
        var foto = document.querySelector('input[name=foto]').files
        var choosefile = document.querySelector('#choosefile')
        if(foto.length)
            choosefile.innerHTML = foto[0].name
            else
            choosefile.innerHTML = 'Choose file'
    }
</script>


<?php
if($_POST){
    copy($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
    //Ambil data dari form
  $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
  $agama=$_POST['agama'];
    $no_telp=$_POST['no_telp'];
  $foto=$_FILES['foto']['name'];
  $thn_masuk=$_POST['thn_masuk'];
    $Jurusan=$_POST['Jurusan'];
    $asal_sekolah=$_POST['asal_sekolah'];
  $Status=$_POST['Status'];

    
    //buat sql
    $sql="INSERT INTO datasiswa VALUES ('$nis','$nama','$kelas','$alamat','$gender','$agama','$no_telp','$foto','$thn_masuk','$Jurusan','$asal_sekolah','$Status')";
    $query=mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Siswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
