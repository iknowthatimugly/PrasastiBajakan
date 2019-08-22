<?php
if (isset($_POST['input'])) {
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    if ($id == "anjay" && $pass == "mabar") {
        echo "WELKAM TU MOBAIL LEJEN";
    }
    else {
        echo "anda di banned dari arena of valor";
    }
}

?>