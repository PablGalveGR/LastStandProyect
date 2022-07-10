<?php
include ("conSQL.php");
if(isset($_POST['username']) && isset($_POST['pass'])){
    $username = $_POST['username'];
    $cod=0;
    $query_User = "SELECT nickname FROM user WHERE nickname LIKE '$username';";
    $RS_User=mysqli_query($con,$query_User);
    $userFetched = mysqli_fetch_assoc($RS_User);
    print($userFetched);
    if(isset($userFetched)){
      print("User repeated");
      header("Location: ../user_add.php?error=data");
    }
    else{
    do{
      $cod=rand(0,999999999);
      $query_Code = "SELECT iduser FROM user WHERE iduser=$cod ;";
      print($query_Code);
      $RS_Cod=mysqli_query($con,$query_Code);
      $codFetched = mysqli_fetch_assoc($RS_Cod);
    }while(isset($codFetched));
    $passwd = $_POST['pass'];
    $passwd_sha1 = sha1($passwd);
    $SQL_IN="INSERT INTO user values
    ($cod, '$username', '$passwd_sha1', 'NULL');";
    $RS_IN=mysqli_query($con,$SQL_IN);
    header ("Location: ../user_log.php");
    }
}
mysqli_close($con);
?>
