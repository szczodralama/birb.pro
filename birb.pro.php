
<?php
//session_start();
//if (!isset($_SESSION['logged'])){
//    header('Location: index.php');
//    exit();
session_start()
//?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>gra.php</title>
</head>
<body>

<?php
echo "<p>Witem ".$_SESSION['user_name']." !";
echo "<p> Email: ".$_SESSION['email'];

$_SESSION['logout.php'] = '<a href="logout.php"<a/>';
?>
</body>
</html>
