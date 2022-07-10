<?php
session_start();
  include('conSQL.php');
  print($_POST['score']);
  if(isset($_SESSION["logged"]) && $_POST["score"]){
    $score = $_POST["score"];
    $cod = $_SESSION["idUser"];
    $query = "UPDATE user SET score = ".$score." WHERE iduser = ".$cod.";";
    $res = mysqli_query($con, $query);
    mysqli_close($con);
  }
  /*$SQL = "SELECT * FROM user";
  $res = mysqli_query($con, $SQL);
  while($row=mysqli_fetch_assoc($res)){
    echo $row["nickname"]." Score:". $row["score"];
  }*/
  
  
?>