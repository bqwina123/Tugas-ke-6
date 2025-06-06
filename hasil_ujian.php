<?php
$nilai = 65;

if ($nilai >= 85) {
    echo "Nilai: A";
} elseif ($nilai >= 70) {
    echo "Nilai: B";
} else {
    echo "Nilai: C";
}

if ($nilai < 70) {
    echo "<p>Siswa belum lulus</p>";
}
?>
