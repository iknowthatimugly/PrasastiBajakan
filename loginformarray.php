<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "anjay" && $pass == "ampas") {
        $_SESSION['login'] = $user;
        echo "<pre>";
        echo "<fieldset>";
        echo "<table>";
        echo "Sugeng rawuh,jenengan wes iso login";
        echo "<form action='tugasformarray.php' method='post'>";
        echo "<br>";
        echo "<input type='submit' name='submit' value='temuju ing menu sabanjure'>";
        echo "</table>";
        echo "</fieldset>";
        echo "</pre>";
    }
    else {
        die ("username & password jenengan salah,monggo ketikno meneh");
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    <fieldset>
    <table>
    <form action="" method="post">
    <h1>Monggo,ketikno username jenengan</h1>
    Username : <input type="text" name="user" require><br>
    Password : <input type="password" name="pass" require><br>
    <br><input type="submit" name="login">
    </form>
    </table>
    </fieldset>
    </pre>
</body>
</html>
<?php } ?>