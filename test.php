<?php
//session_start();
//if (isset($_SESSION['logged'])){
//    header('Location: logged.php');
//    exit();
//}
//?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Sing in</h1>
<!--<form action="primary_connection.php" method="post">-->
<!--    Login <br/>-->
<!--    <input type="text" name="Login">-->
<!--    <br/><br/>-->
<!--    Password <br/>-->
<!--    <input type="password" name="Password">-->
<!--    <br><br>-->
<!--    <input type="submit" value="Send this shit">-->
<!--</form>-->
<?php
if (isset($_SESSION['error'])) echo $_SESSION['error'];
?>
</body>
</html>
