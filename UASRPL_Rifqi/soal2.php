<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajihan Karyawan</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<center>
    <fieldset>
    <h2>Penggajihan Karyawan</h2>
    <h1>PT. Selalu Makmur Jaya</h1>
    <form action="struksoal2.php" method="post">
        <table align="center">

            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type="text" name="bendahara"></td>
            </tr>

            <tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type="text" name="pekerja"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="gender" value="Laki-laki">Laki-laki
                    <input type="radio" name="gender" value="Perempuan">Perempuan
                </td>
            </tr>

            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tgl"></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option value="">---Pilih Jabatan---</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="Sekertaris">Sekretaris</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>

            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan">
                    <option value="">---Pendidikan Terakhir---</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select></td>
            </tr>

            <tr>
                <td>Status Pegawai</td>
                <td>:</td>
                <td><input type="radio" name="status" value="Tetap"><b>Tetap</b>
                    <input type="radio" name="status" value="Kontrak"><b>Kontrak</b> 
                </td>
            </tr>

            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="number" name="lembur">Hari/Rp. 20.000</td>
            </tr>
            <tr>
                <td>Potongan BPJS</td>
                <td>:</td>
                <td><input type="number" name="potongan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    </center>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['kirim'])) {

    //variabel
    $bendahara = $_POST['bendahara'];
    $pekerja = $_POST['pekerja'];
    $kelamin = $_POST['gender'];
    $tanggal = $_POST['tgl'];
    $jabatan = $_POST['jabatan'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];
}
?>