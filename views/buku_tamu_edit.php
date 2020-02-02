<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM buku_tamu WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Tamu</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="bukuTamu2" placeholder="Inputkan Tanggal Masuk" required value="<?= $data['tanggal'] ?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="bukuTamu2" placeholder="Inputkan Nama" required value="<?= $data['nama'] ?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="bukuTamu2" placeholder="Inputkan Jabatan" required value="<?= $data['jabatan'] ?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="bukuTamu2" placeholder="Inputkan Alamat" required value="<?= $data['alamat'] ?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" class="form-control" id="bukuTamu2" placeholder="Inputkan No HP" required value="<?= $data['nohp'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keperluan" class="col-sm-3 control-label">Keperluan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keperluan"class="form-control" id="bukuTamu2" placeholder="Inputkan Keperluan" required value="<?= $data['keperluan'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku_tamu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Tamu
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $keperluan=$_POST['keperluan'];
    //buat sql
    $sql="UPDATE buku_tamu SET tanggal='$tanggal',nama='$nama',jabatan='$jabatan',nohp='$nohp' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku_tamu&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



