<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $thn_masuk=$_POST['thn_masuk'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI SMK SWASTA AMAL BAKTI  </h2>
                        <h4>Jl. Irigasi No.101, Sei Kamah II, Sei Dadap <br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21251 </h4>
                        <hr>
                        <h3>DATA SISWA TAHUN <?php echo "$thn_masuk"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th width="18%"><center>Nis</center></th><th><center>Nama</center></th><th><center>Jurusan</center></th><th width="14%"><center>Alamat</center></th><th width="15%"><center>   Asal Sekolah</center></th><th width="10%">No telepon</th><th width="10%">Foto</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM datasiswa WHERE substr(thn_masuk,1,4)='$thn_masuk'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['Jurusan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
									<td><?= $data['no_telp'] ?></td>
                                    <td><img src="../foto/<?= $data['foto']?>" width="120" height="100"></td>
								
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="12" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah, S.Pd<strong></u><br>
                                        NIP.102871291416712
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
