
<?php
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAkhir = hitungDiskon(150000, 10);

    echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");

    
<?php
    function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    $luas = hitungLuasPersegiPanjang(8, 4);

    echo "<br>";
    echo "Luas persegi panjang: " . $luas . " cm2";
?>

?>

