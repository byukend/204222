<?php
    session_start();
if(isset($_GET['logout']))
{
  session_destroy();
  header("location: ../../index.php?");
  exit();
}

if(isset($_POST['username'],$_POST['password'])){
  include("../connectdb.php");
  $result = $con->query("SELECT * FROM account WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'");
  if($data = $result->fetch_assoc() !=NULL){
    $_SESSION['logged_in'] = $_POST['username'];
    $_SESSION['type'] = $data['type'];
    if($_SESSION['type']=="admin"){
      header("location: index.php");
    }
    else{
      header("location: ../../index.php?");
    }
  }
  else{
    header("location: login.php?wrong=1");
  }

}

?>