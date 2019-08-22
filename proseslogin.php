<?php
if (isset($_POST['input'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    if ($id == "anjay" && $pass == "mabar") {
        echo "WELKAM TU MOBAIL LEJEN";
    }
    elseif ($id == "ricardo" && $pass == "milos") {
        echo "BISITA HARI DAM DAM SPERA LILA DOta";
        echo "<br>".date("g:i a");
    }
    else {
        echo "anda di banned dari arena of valor";
    }
}

?>