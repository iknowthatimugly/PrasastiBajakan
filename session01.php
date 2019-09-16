<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "Chester" && $pass == "lol") {
        $_SESSION['login'] = $user;
        echo "<h1>WELCOME TO MOBILE LEGENDS</h1>";
        echo "<h2>Klik <a href='session02.php'>di sini(session02.php)</a>untuk menuju halaman pemeriksaan session</h2>";

    }
} else {
?>
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="login" value="Log In">
</form>
</body>
</html>
<?php } ?>