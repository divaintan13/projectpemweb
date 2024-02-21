<?php
//membuat function hitung luas segitiga
function luas_segitiga($alas, $segitiga){
    $luas = 0,5 * $alas *$tinggi;
    return "hasil perhitungan luas: $luas";
}

//memanggil function 
echo luas_segitiga (5, 8);