<?php
$teks = "Saya Diah Citra Ningrum sedang mengerjakan tugas PT.Multi Access Indonesia";
//bersihkan teks dari tanda baca
$filter = array(".",",","!","?","(",")"); //bisa ditambahkan
$teks_clean = str_replace($filter, "", $teks); //bersihkan tanda baca

$kata   = explode(" ", $teks_clean);
$hasil  = count($kata);
$data   = array_count_values($kata);

echo "<b>Teks</b> <br> $teks";
echo "<hr>";
echo "Jumlah Kata: $hasil buah kata";
echo "<hr>";

foreach($data as $x => $x_value) {
    echo $x." : ".$x_value;
    echo "<br>";
}
echo "<hr>";
?>