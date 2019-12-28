<?php
$jumlahSaluran = 523;
$jumlahTerpakai = 8891;
$rataRataPemakaian = $jumlahTerpakai/$jumlahSaluran;

echo("
<p>
  Jumlah Saluran = $jumlahSaluran <br/>
  Jumlah Terpakai = $jumlahTerpakai <br/>
  Rata-rata Pemakaian = ...? <br/>
  Jawaban : $rataRataPemakaian liter/keluarga
</p>
");
?>
