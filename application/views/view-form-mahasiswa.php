<html>
<head>
 <title>Form Input Mahasiswa</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    </style>
<body>
    <h1>Aplikasi Sederhana Digital Learning Management System (Di-Lemas) <h1>

 <center>
 <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 Form Input Data Mahasiswa
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
 <input type="text" name="nama" id="nama">
 <?= form_error('nama', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>NIS</th>
 <td>:</td>
 <td>
 <input type="text" name="nis" id="nis">
 <?= form_error('nis', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <tr>
 <th>Kelas</th>
 <th>:</th>
 <td>
 <input type="text" name="kelas" id="kelas">
 <?= form_error('kelas', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>Tanggal Lahir</th>
 <th>:</th>
 <td>
 <input type="date" name="tgl" id="tgl">
 <?= form_error('tgl', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>Tempat Lahir</th>
 <th>:</th>
 <td>
 <input type="text" name="tmpt" id="tmpt">
 <?= form_error('tmpt', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <input type="text" name="alamat" id="alamat">
 <?= form_error('alamat', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <input type="radio" name="jenis" id="laki-laki" value="laki-laki"> Laki-Laki
 <input type="radio" name="jenis" id="perempuan" value="perempuan"> Perempuan
 <?= form_error('jenis', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <select name="agama" id="agama">
    <option value="islam">Islam</option>
    <option value="kristen">kristen</option>
    <option value="katolik">Katolik</option>
    <option value="budha">Budha</option>
    <option value="hindu">Hindu</option>
    <option value="protestan">Protestan</option>
    <option value="khonghucu">Khonghucu</option>
 </select>
 <?= form_error('agama', '<small class="text-danger pl-3">', '</small'); ?>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>
