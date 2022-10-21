<html>
<head>
<title>Tampil Data Mahasiswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Mahasiswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>NIS</td>
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
 <td>Tanggal Lahir</td>
 <td>:</td>
 <td>
 <?= $tgl; ?>
 </td>
 </tr>
 <td>Tempat Lahir</td>
 <td>:</td>
 <td>
 <?= $tmpt; ?>
 </td>
 </tr>
 <td>Alamat</td>
 <td>:</td>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <td>Jenis Kelamin</td>
 <td>:</td>
 <td>
 <?= $jenis; ?>
 </td>
 </tr>
 <td>Agama</td>
 <td>:</td>
 <td>
 <?= $agama; ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('mahasiswa'); 
?>">kembali</a>
 </td>
 </tr>
 </table>
 </center>
</body>
</html>
