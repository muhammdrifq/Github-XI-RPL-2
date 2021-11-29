<?php

//Perulangan For Bintang
for($row = 1 ; $row <= 5 ; $row++)
{
    for($col = 5 ; $col >= $row ; $col--)
    {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

//Perulangan For Bintang 1
for($row = 1 ; $row <= 5 ; $row++)
{

    for($col = 1 ; $col <= $row ; $col++) 
    {
        echo "*";
    }

    echo "<br>";
}

echo "<br>";
echo "<br>";

//Perulangan For Bintang 2 
for($row = 1 ; $row <= 5 ; $row++) 
{
    for($space = 5 ; $space >= $row ; $space--) 
    {
        echo " &nbsp";
    }
    for($col = 1 ; $col <= $row ; $col++)
    {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

//Perulangan for Bintang 4
for($row = 1 ; $row <= 5 ; $row++)
{
    for($space = 1 ; $space <= $row ; $space++){
        echo " &nbsp";
    }
    for($col = 5 ; $col >= $row ; $col--)
    {
        echo "*";
    }
    echo "<br>";
}
?>