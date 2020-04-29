<h3>Data Mahasiswa</h3>
<hr>
<a href="input_mhs.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>L/P</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $SqlMhs = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY npm ASC" );

    while($d = mysqli_fetch_array($SqlMhs)){
        echo "<tr>
            <td align='center'>$no</td>
            <td>$d[npm]</td>
            <td>$d[nama_mhs]</td>
            <td align='center'>$d[jk]</td>
            <td>$d[alamat]</td>
            <td>align='center'>
                 <a href='edit_mhs.php?npm=$d[npm]'>Edit</a> | <a href='hapus_mhs.php?npm=$d[npm]'>Hapus</a>
              </td>
        </tr>";
        $no++;
    }
    ?>

</table>


