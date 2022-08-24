<?php
session_start();
//if ((!isset($_POST['Login']))){
//    header('Location: index.php');   // if not set login or password => transfer to...
//    exit();
//}else if ((!isset($_POST['Password']))){
//    header('Location: index.php');
//    exit();
//}

//require_once "connect.php";
$polaczenie = @new mysqli("localhost", "root", "", "loginsystem_birbpro");   //mysqli library

if ($polaczenie->connect_errno!=0){
  echo "ERROR:".$polaczenie->connect_errno;   //info about possible error
}
else{
  $log = $_POST['Login'];
  $passwd = $_POST['Password'];

  $log = htmlentities($log, ENT_QUOTES, "UTF-8");   //sql injection protection
  $passwd = htmlentities($passwd, ENT_QUOTES, "UTF-8");

 if ($result = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE user_name='%s' AND passwd='%s'",  //sql query
     mysqli_real_escape_string($polaczenie, $log),
     mysqli_real_escape_string($polaczenie, $passwd) ))) {
   $how_much_users = $result->num_rows;
   if ($how_much_users>0){
       $_SESSION['logged'] = true;  // check if user is logged
      $wiersz = $result->fetch_assoc();  //assoc array for database
      $_SESSION['id'] = $wiersz['id'];   //check id form database
      $_SESSION['user_name'] = $wiersz['user_name'];  //check user_name from database
      $_SESSION['email'] = $wiersz['email'];  // -||-

      unset($_SESSION['error']);  //unset session because we don't need this later (condition fulfilled)
      $result->free_result();     //memory release
      header('Location: logged.php');   //transfer to ...
   } else{
       header('Location: index.php');
        $_SESSION['error'] = '<script> {alert("Invalid login or password!");}</script>';
   }
 }
  $polaczenie->close();    //close connection to database
}
//$_SESSION['log_out'] = header('Location: logout.php');
?>
