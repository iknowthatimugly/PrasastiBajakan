<?php
if (isset($_POST['sbm'])) {
    $x = $_POST['bil'];
    $y = $_POST['pangkat'];
    for ($i=0; $i < count($x); $i++) { 
        for ($j=1; $j <= $y[$i]; $j++) { 
        echo $x[$i];
        if ($j < $y[$i]) {
        echo "x";
        }
        }
    
    $hasil = pow($x[$i], $y[$i]);
    echo " = " . $hasil . " -> ";
    if ($hasil % 2 == 1) {
        echo "Bilangan Ganjil";
    } else {
        echo "Bilangan Genap";
    }
    echo "<hr>";
}
}

?>