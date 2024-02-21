<?php
//membuat array asosiatif (terdiri atas key & value)
$mhs = [
    'nama' => 'Diva',
     'nim' => '011',
     'prodi' => 'SI'
     'ips' => [
        1 =>3.40,
        2 =>3.70,
        3 =>4.0,

     
     ],

     //memanggil array asosiatif
     echo "nama : " . $mhs['nama'];
     echo "<br> ips semester 1: $mhs['ips'][1];
     echo "<br> ips semester 2: $mhs['ips'][2];
     echo "<br> ips semester 3: $mhs['ips'][3];