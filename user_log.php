<?php
include("php/cabecera.php");
?>
<!-- ***** Hero Area Start ***** -->
<main class="content">
  <form action="php/user_check.php" method="POST">
    <h1>The Last Stand Sign in</h1>
    <br>
    <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
      <tr>
        <td colspan="2" align="center" 
        <?php if (isset($_GET["error"]) && $_GET["error"] == "data") { ?> bgcolor=red><span style="color:#fffff"><b>Try again</b></span>
        <?php } else { ?>
          bordercolor="red"><span>
            <h3>Log in</h3>
          </span>
        <?php } ?></td>
      </tr>
      <tr>
        <td>
          <h3>Nickname:</h3>
        </td>
        <td><input name="usuario" type="text" maxlength="50"></td>
      </tr>
      <tr>
        <td>
          <h3>Password:</h3>
        </td>
        <td><input name="pass" type="password" maxlength="50"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="Submit" type="Submit" value="Sign in"></td>
      </tr>
    </table>
  </form>
</main>
</div>
<?php
include("php/footer.php");
?>