<?php

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    return $nilaiAkhir;
}

function tentukanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 90) {
        return "A";
    } elseif ($nilaiAkhir >= 80) {
        return "B";
    } elseif ($nilaiAkhir >= 70) {
        return "C";
    } elseif ($nilaiAkhir >= 60) {
        return "D";
    } else {
        return "E";
    }
}

function tentukanStatus($nilaiAkhir) {
    if ($nilaiAkhir >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function tampilkanHasil($nama, $tugas, $uts, $uas) {
    $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
    $grade = tentukanGrade($nilaiAkhir);
    $status = tentukanStatus($nilaiAkhir);

    echo "<h2>Hasil Nilai Mahasiswa</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai Tugas: " . $tugas . "<br>";
    echo "Nilai UTS: " . $uts . "<br>";
    echo "Nilai UAS: " . $uas . "<br>";
    echo "Nilai Akhir: " . number_format($nilaiAkhir, 1) . "<br>";
    echo "Grade: " . $grade . "<br>";
    echo "Status: " . $status . "<br>";
}

$nama = "Andi";
$tugas = 85;
$uts = 80;
$uas = 90;

tampilkanHasil($nama, $tugas, $uts, $uas);
?>
