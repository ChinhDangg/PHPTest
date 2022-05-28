<?php

$con = new mysqli('mysql_db', 'root', 'root', 'test_db');


if (!$con) {
    echo "Fail";
    die("Connection failed: " .mysqli_connect_errno());
}
?>

<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>