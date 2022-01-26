<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM datasiswa WHERE nis ='" . $_GET ['nis'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td> <td><?= $data['Jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Gender</td> <td><?= $data['gender'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telpon</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
						<tr>
                            <td>Tahun Masuk</td> <td><?= $data['thn_masuk'] ?></td>
                        </tr>
					
						<tr>
                            <td>Asal Sekolah</td> <td><?= $data['asal_sekolah'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['Status'] ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td> <td><?php echo "<img src='foto/".$data['foto']."' width='90px' height='90px'/>"?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Siswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

