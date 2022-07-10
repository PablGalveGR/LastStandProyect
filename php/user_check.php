<?php
$USU_P = $_POST["usuario"];
$PASSWD_P = sha1($_POST["pass"]);
include("conSQL.php");
$SQL = "SELECT * FROM user WHERE nickname LIKE '$USU_P' AND password LIKE '$PASSWD_P'";
//echo $SQL;
$RS = mysqli_query($con, $SQL);
$row = mysqli_fetch_assoc($RS);
$USU = $row["nickname"];
$PASSWD = $row["password"];
$cod = $row["iduser"];
//comprobamos si los datos son correctos
if ($USU_P == $USU && $PASSWD_P == $PASSWD) {
  //Si son validos... creo una sesion
  //creando sesion y guardando datos
  session_start();
  $_SESSION["logged"] = "yes";
  $_SESSION["username"] = $USU;
  $_SESSION["idUser"] = $cod;
  header("Location: ../index.php");
} else {
  //si no existe le mando otra vez a la portada
  header("Location: ../user_log.php?error=data");
}
