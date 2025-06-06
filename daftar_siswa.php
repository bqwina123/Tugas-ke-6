<?php
$siswa = ["Ani", "Budi", "Citra", "Dodi"];
?>
<h3>Daftar Siswa:</h3>
<ul>
    <?php foreach ($siswa as $nama): ?>
        <li><?php echo $nama; ?></li>
    <?php endforeach; ?>
</ul>
