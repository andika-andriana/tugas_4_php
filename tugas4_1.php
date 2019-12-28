<?php
$hargaBeli = 8000;
$hargaJual = 7500;
$keuntungan = 300;
$hasil = ceil(($hargaBeli-$hargaJual)/$keuntungan);

echo("
<p>
  Harga Beli = Rp $hargaBeli <br/>
  Harga Jual = Rp $hargaJual <br/>
  Keuntungan  = Rp $keuntungan <br/>
  Berapa Jumlah kambing yang dibeli? <br />
  Jawaban: $hasil ekor
</p>
")

?>
