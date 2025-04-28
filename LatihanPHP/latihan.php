<?php 
echo "Hello, PHP!";
$nama = "Mbak F";
$umur = 22;
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";
$a = 10;
$b = 5;
echo $a + $b; // penjumlahan echo $a - $b; // pengurangan echo $a * $b; // perkalian echo $a / $b; // pembagian echo $a % $b; // modulus
$nilai = 80;
if ($nilai >= 75) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
$hari = "Senin";
 
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}
for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}
$hewan = ["Kucing", "Anjing", "Burung"]; echo $hewan[0]; // Output: Kucing
?>