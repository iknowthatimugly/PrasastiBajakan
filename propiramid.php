<?php
if (isset($_POST['submit'])) {
    $input = $_POST['batu'];
    for ($i=0; $i <= $input ; $i++) {
        for ($j=$input; $j > $i; $j--) {
        echo "&nbsp;";
        }
        for ($k=0; $k > $i; $k--) {
        echo "*";
        }
        for ($l=$input; $l > $i ; $l--) {
        echo "*";
        }
        echo "<br>";
        }
    
    for ($i=0; $i <= $input ; $i++) {
        for ($j=$input; $j > $i; $j--) {
        echo "&nbsp;";
        }
        for ($k=0; $k < $i; $k++) {
        echo "*";
        }
        for ($l=$input; $l < $i ; $l++) {
        echo "*";
        }
        echo "<br>";
        }

}
?>