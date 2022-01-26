<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM datasiswa WHERE nis='" . $_GET ['nis'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI SMK SWASTA AMAL BAKTI </h2>
                        <h4>Jl. Irigasi No.101, Sei Kamah II, Sei Dadap  <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21251 </h4>
                        <hr>
                        <h3>DATA PERSISWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nis</td> <td><?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td >Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td> <td><?= $data['Jurusan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>Asal Sekolah</td> <td><?= $data['asal_sekolah'] ?></td>
                                </tr>
								<tr>
                                    <td>Tahun Masuk</td> <td><?= $data['thn_masuk'] ?></td>
                                </tr>
								<tr>
                                    <td>No Telepon</td> <td><?= $data['no_telp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Foto</td> <td><img src="../foto/<?= $data['foto']?>" width="150" height="150"></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah, S.Pdi<strong></u><br>
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