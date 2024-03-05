<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

//hitung nilai total (30% uts + 35% uas + 35% tugas)
$nilai_total = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);

if ($nilai_total > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}

if($nilai_total <= 35){
    $grade = "E";
} elseif($nilai_total >= 36 && $nilai_total <= 55){
    $grade = "D";
} elseif($nilai_total >= 56 && $nilai_total <= 69){
    $grade = "C";
} elseif($nilai_total >= 70 && $nilai_total <= 84){
    $grade = "B";
} elseif($nilai_total >= 85 && $nilai_total <= 100){
    $grade = "A";
} else{
    $grade = "I";
}

if($grade <= 35){
    $predikat = "Sangat Kurang";
} elseif($grade >= 36 && $nilai_total <= 55){
    $predikat = "Kurang";
} elseif($grade >= 56 && $nilai_total <= 69){
    $predikat = "Cukup";
} elseif($grade >= 70 && $nilai_total <= 84){
    $predikat = "Memuaskan";
} elseif($grade >= 85 && $nilai_total <= 100){
    $predikat = "Sangat Memuaskan";
} else{
    $predikat = "Tidak Ada";
}

//tampilkan hasil form
echo "Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $UAS";
echo "<br>Nilai Tugas : $tugas";
echo "<br>Nilai Total : $nilai_total";
echo "<br> Status : $status";
echo "<br> Grade : $grade";
echo "<br> Predikat : $predikat";

