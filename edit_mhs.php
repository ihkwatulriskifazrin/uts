<h3> Form Edit Data Mahasiswa</h3>
<hr>
<?php
include "koneksi.php";
$sqlEdit = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE npm='$_GET[npm]'");
$e=mysqli_fetch_array($sqlEdit);
?>
<form method="post" action="">
    <table>
        <tr>
            <td>NPM</td>
            <td><Input type="text" name="txtNpm" value="<?php echo $e['npm']; ?>"></td>
        </tr>
         <tr>
            <td>Nama Mahasiswa</td>
            <td><Input type="text" name="txtNpm" size="40" value="<?php echo $e['nama_mhs']; ?>"></td>
        </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="txtKelamin">
                    <option value="<?php echo $e['jk']; ?>"><?php echo $e['jk']; ?></option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </td>
        </tr>
         <tr>
            <td>Alamat</td>
            <td><input type="text" name="txtAlamat" size="60"  value="<?php echo $e['alamat']; ?>"></td>
        </tr>
        <tr>
             <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $update = mysqli_query($konek, "UPDATE mahasiswa SET nama_mhs='$_POST[txtNama]',
                                                        jk='$_POST[txtKelamin]',
                                                        alamat='$_POST[txtAlamat]'
                                                        WHERE npm='$_POST[txtNpm]'");

    if($update){
        header('location:data_mhs.php');
    }else{
        echo "Gagal mengupdate data..."; 
    }
}
?>