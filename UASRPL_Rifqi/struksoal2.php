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


    // GAJI
    // Direktur
    if ($jabatan == "Direktur"){
        $gaji = 10000000;
    }
    // Manager
    elseif ($jabatan == "Manager"){
        $gaji = 7500000;
    }
    // Sekertaris
    elseif ($jabatan == "Sekertaris"){
        $gaji = 5000000;
    }
    //Karyawan
    elseif ($jabatan == "Karyawan"){
        $gaji = 3000000;
    }
    //OB
    elseif ($jabatan == "OB"){
        $gaji = 1500000;
    }


    //Pendidikan Terakhir
    // SD
    if ($pendidikan == "SD") {
        $tunjangan = 200000;
    } 
    //SMP
    elseif ($pendidikan == "SMP") {
        $tunjangan = 500000;
    }
    //SMA
    elseif ($pendidikan == "SMA") {
        $tunjangan = 1000000;
    }
    //S1
    elseif ($pendidikan == "S1") {
        $tunjangan = 1500000;
    }
    //S2
    elseif ($pendidikan == "S2") {
        $tunjangan = 2000000;
    }


    //STATUS KONTRAK
    //Pegawai Tetap
    if($status == "Tetap"){
        $bonus = 500000;
    }
    else {
        $bonus = 0;
    }

    $vakasi = $lembur * 20000;
    $bonus = $bonus;
    $total = ($gaji + $tunjangan + $vakasi + $bonus) - $potongan;
    
    echo "<center>";
    echo "<br>";
    echo "<h2>Struk Gaji Karyawan</h2>";
    echo "----------------------------------------------------------------------------------------";
    echo "</center>";
    echo "<center>";
    echo "<table>";
    
    echo "<tr>";
    echo "<td></td>
        <td></td>
        <td><p align=right>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTanggal : <b><i>$tanggal</i></b></p></td> ";
    echo "</tr>";

    echo "<tr>";
    echo "<td><h3><i>Gaji Pokok<i></h3></td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Nama Karyawan </td>
            <td>:</td>
            <td>$pekerja</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Jenis Kelamin </td>
             <td>:</td>
             <td>$kelamin</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Pendidikan Terakhir </td>
             <td>:</td>
             <td>$pendidikan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Jabatan </td>
             <td>:</td>
             <td>$jabatan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Gaji </td>
             <td>:</td>
             <td>Rp. $gaji</td>";
    echo "</tr>";

    echo "</tr>
         <td><br></td>
         </tr>";

    echo "<tr>";
        echo "<td><h3><i>Tunjangan</i></h3></td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Tunjangan Pendidikan </td>
             <td>:</td>
             <td>Rp. $tunjangan</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Vakasi Lembur </td>
             <td>:</td>
             <td>Rp. $vakasi</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Bonus Status Kerja </td>
            <td>:</td>
            <td>Rp. $bonus</td>";
    echo "</tr>";

    echo "</tr>
         <td><br></td>
    </tr>";

    echo "<tr>";
        echo "<td><h3><i>Potongan</i></h3></td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>Potongan BPJS</td>
             <td>:</td>
             <td>Rp. $potongan</td>";
    echo "</tr>";

    echo "</tr>
         <td><br></td>
    </tr>";

    echo "<tr>";
        echo "<td><h3><i>Total Gaji</i></h3></td>
             <td><h3><i>:</i></h3></td>
             <td><h3><i>Rp. $total</i></h3></td>";
    echo "</tr>";

    echo "</tr>
         <td><br></td>
    </tr>";

    echo "<tr>";
        echo "<td></td>
             <td></td>
             <td><p align=right>Bendahara : $bendahara</p></td> ";
    echo "</tr>";

    echo "</center>";
    echo "</table>";
}
?>
