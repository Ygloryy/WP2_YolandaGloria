<html>
<head>
    <title>Tampil Data Siswa</title>
</head>
<body>
     <center>
        <table>
            <tr>
                <th colspan="3">
                Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
        <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                 <td>
                 <?= $nama; ?>
                 </td>
            </tr>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td>
                <?= $nis; ?>
                 </td>
            </tr>
             <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                <?= $kelas; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                <?= $alamat; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>  
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                <?= $agama; ?>
                </td>
            </tr>
            <tr>      
                <td colspan="3" align="center">
                <a href="<?= base_url('dlemas'); 
                ?>">Kembali</a>
                </td>
                </tr>
        </table>
    </center>
</body>
</html>