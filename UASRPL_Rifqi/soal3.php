<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengulangan</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <center>
    <form action="" method="POST">
        <fieldset>

        <table>
            <h2>Form Pengulangan</h2>

            <tr>
                <td></td>
                <td></td>
                <td>1. Deret Bilangan Ganjil<br>
                    2. Segitiga Sama Kaki Terbalik<br>
                    3. Deret Bilangan Kelipatan 3</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="text" name="pilih" required></td>
            </tr>
            <tr>
                <td>Masukan Angka</td>
                <td>:</td>
                <td><input type="number" name="angka" required></td>
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
   $pilih = $_POST['pilih'];
   $angka = $_POST['angka'];

   echo "<center>";
   echo "<br>";
   echo "<br>";
   

   //Deret Bilangan Ganjil
   if ($pilih == "1") {
       
        echo "Deret Bilangan Ganjil";
        echo "<br>";
        //Perulangan Ganjil
        for ($ganjil = 1 ; $ganjil < $angka; $ganjil+=2){ 
                echo "<b>$ganjil&nbsp&nbsp</b>";
            }
   }

   //Bintang terbalik
   elseif ($pilih == "2"){
       
    echo "Bintang Sama Kaki Terbalik";
    echo "<br>";
        //Perulangan Ganjil
        for ($row = $angka ; $row >= 1; $row--){ 
            for ( $space = $angka; $space >= $row ; $space--) { 
                echo " ";
            }
            for ( $star = 1; $star <= $row; $star++) { 
               echo "*&nbsp";
            }

                echo "<br>";
            }
   }
   //Deret 3
   elseif ($pilih == "3") {
       
    echo "Deret Bilangan Kelipatan 3";
    echo "<br>";
        //Perulangan Ganjil
        for ($deret = 3 ; $deret < $angka; $deret+=3){ 
                echo "<b>$deret&nbsp&nbsp</b>";
            }
   }

   echo "</center>";
}

?>