<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM mahasiswa WHERE npm='$_GET[npm]'");

if($hapus){
    header('location:data_mhs.php');
}else{
    echo "Gagal menghapus data...";
}
?>
