<?php
if (isset($_POST['submit'])) {

    #variabel
    $soal = $_POST['soal'];

    #RELASI 
    if ($soal == "1") {
        header ("location:soal1.php");
    }
    
    elseif ($soal == "2") {
        header ("location:soal2.php");
    }

    elseif ($soal == "3") {
        header ("location:soal3.php");
    }
}

?>

<html>
    <head><title>SOAL UAS</title></head>
    <body>
        <center>
            <br>
            <br>
        <table border="3" cellspacing="4">
            <form action="" method="post">
            <tr>
            <th colspan="3"><h2>&nbsp&nbsp&nbsp&nbsp&nbspPilih Soal&nbsp&nbsp&nbsp&nbsp&nbsp</h2></th>
            </tr>

            <tr>
                <td>Soal yang Tersedia</td>
                <td>:</td>
                <td><select name="soal">
                    <option value="1">Soal 1</option>
                    <option value="2">Soal 2</option>
                    <option value="3">Soal 3</option>
                </select></td>
            </tr>

            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="KIRIM">
                </td>
            </tr>
            </form>
        </table>
        </center>
    </body>
</html>