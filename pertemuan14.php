<?php

//Mengambil nilai'angka'dari URL
$angka=isset($_GET['angka'])?
intval($GET['angka']):10;

//Validasi nilai'angka'agar tidak melebihi batas tertentu
$angka=max(1,min($angka,10));

//Menampilkan rangkaian angka terurut 
for($i=1;$i<=$angka;$i++){
    for($j=1;$j<=$angka-$+;$j++){
        echo $j.'';
    }
    echo "<br>";
}
?>