<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Miko Mall</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <br>
    <br>
    <center>
    <form action="" method="POST">
        <fieldset>

        <table>
            <h2>Syarat Masuk ke MIKO MALL</h2>
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Status Vaksin</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option>---Status Vaksin---</option>
                        <option value="Sudah Vaksin">Sudah vaksin</option>
                        <option value="Belum Vaksin">Belum vaksin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name ="submit" value="KIRIM"></td>
            </tr>
        </table>

        </fieldset>
        </center>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit']))
{
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "<center>";
    echo "<br>";

    echo "<table>";

        echo "<tr>";
            echo "<td>Nama Anda</td>";
            echo "<td>:</td>";
            echo "<td>$nama</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>Status Vaksin</td>";
            echo "<td>:</td>";
            echo "<td>$status</td>";
        echo "</tr>";

    echo "</table>";

    echo "<br>";

    if ($status == "Sudah Vaksin") {

        echo "<h3><i>Diizinkan</i></h3>";

    } 
    elseif ($status == "Belum Vaksin") {

        echo "<h3><i>Tidak Diizinkan</i></h3>";
        echo "<br>";
        echo "<br>";
        echo '<a href = "https://www.pedulilindungi.id/" target="_blank">Silahkan Daftar Vaksin Terlebih Dahulu</a>';
        echo "<br>";
    }
    echo "</center>";

}

?>