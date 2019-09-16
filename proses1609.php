<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "<fieldset>";
    echo "<table>";
    echo "Wilujeng rawuh ing halaman anyar <br>";
    echo "Pilih Menu : <br>";
    echo "<a href='hal1ses.php'>Hal 1</a><br>";
    echo "<a href='hal2ses.php'>Hal 2</a><br>";
    echo "<a href='hal3ses.php'>Hal 3</a><br>";
    echo "Balek meneh temuju ing halaman login<br>";
    echo "<a href='logout1609.php' onclick='myFunction()'>Logout</a>";
    echo "</form>";
    echo "</table>";
    echo "</fieldset>";
} else {
    die ("jenengan durung login,monggo login disek sedurung balek meneh");
}
?>