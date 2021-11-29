<?php
if (isset($_POST['submit']))
{
    $depart = $_POST['depart'];
    
    $return = $_POST['return']; 
    
    $kategori1 = $_POST['kategori1'];
    $kategori2 = $_POST['kategori2'];
    $kategori3 = $_POST['kategori3'];
    
    //rumus jkt
    if ($depart == "jkt")
    {
        
        if ($return == "sin")
        {
            //harga dewasa
            $hargadewasa = 300000 * $kategori1;
            //harga anak
            $hargaanak = (300000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (300000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
        }

        elseif ($return == "kul")
        {
            //harga dewasa
            $hargadewasa = 250000 * $kategori1;
            //harga anak
            $hargaanak = (250000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (250000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
            
        }
    }

    elseif ($depart == "srg")
    {
        if ($return == "sin")
        {
            //harga dewasa
            $hargadewasa = 350000 * $kategori1;
            //harga anak
            $hargaanak = (350000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (350000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
        }

        elseif ($return == "kul")
        {
            //harga dewasa
            $hargadewasa = 300000 * $kategori1;
            //harga anak
            $hargaanak = (300000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (300000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
        }
    }

    elseif ($depart == "plm")
    {
        if ($return == "sin")
        {
            //harga dewasa
            $hargadewasa = 325000 * $kategori1;
            //harga anak
            $hargaanak = (325000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (325000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
        }

        elseif ($return == "kul")
        {
            //harga dewasa
            $hargadewasa = 285000 * $kategori1;
            //harga anak
            $hargaanak = (285000 * 0.40) * $kategori2;
            //harga bayi
            $hargabayi = (285000 * 0.25) * $kategori3;
            //harga total
            $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
        }
    }

}
?>

<html>
<body align="center">
    <table border="2" cellpadding="4">
        <form action="" method="post">
        <tr>
            <th colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPemesanan Tiket Online&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        </tr>

        <tr>
            <td colspan="3"><center>Promo untuk keberangkatan 23 Januari 2012..!!</center></td>
        </tr>

        <tr>
            <td>DEPART</td>
            <td>:</td>
            <td><select name="depart" required>
                <option value="jkt" placeholder="--PILIH--">JAKARTA(CKG)</option>
                <option value="srg" placeholder="--PILIH--">SEMARANG(SRG)</option>
                <option value="plm" placeholder="--PILIH--">PALEMBANG(PLM)</option>
            </select></td>
        </tr>
        <tr>
            <td>RETURN</td>
            <td>:</td>
            <td><select name="return" required>
                <option value="sin">SINGAPORE(SIN)</option>
                <option value="kul">KUALA LUMPUR(KUL)</option>
            </select></td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td><input type="number" name="kategori1" placeholder="Jumlah Tiket">Dewasa(+17)<br>
            <input type="number" name="kategori2" placeholder="Jumlah Tiket">Anak(+2)<br>
            <input type="number" name="kategori3" placeholder="Jumlah Tiket">Bayi(0-2)</td>
        </tr>
        <tr>
            <td>Mata Uang</td>
            <td>:</td>
            <td><input type="radio" name="idr" value="IDR">IDR</td>
        </tr>

        <tr>
            <td colspan="3"><input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset"></td>
        </tr>
        
    </form>
    </table>
</body>
</html>



<html>
    <body align="center">
        <br>
        <br>
        <table border="2">
        <tr>
            <th colspan="3">&nbsp&nbsp&nbspStruk Pembayaran&nbsp&nbsp&nbsp</th>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td>Dewasa(+17) -> <?php   echo $kategori1?> tiket<br>
            Anak(+2) -> <?php   echo $kategori2?> tiket<br>
            Bayi(0-2) -><?php   echo $kategori3?> tiket</td>
        </tr>
        <tr>
            <td>Jumlah yang harus dibayar</td>
            <td>:</td>
            <td><?php echo $hargatotal?></td>
        </tr>
        </table>

    </body>

</html>