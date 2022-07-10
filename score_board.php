<?php
include('php/cabecera.php');
include('php/conSQL.php');
$query = "SELECT idUser, nickname, score FROM user WHERE score >0 ORDER BY score DESC LIMIT 100;";
?>
<main class="content">
  <h1>Score board</h1>
  <table class="scoreTable">
    <thead>
      <tr>
        <th>Position</th>
        <th>Nickname</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $res = mysqli_query($con, $query);
      $count = 0;
      while ($row = mysqli_fetch_assoc($res)) {
        $count += 1;
        if(isset($_SESSION['idUser']) && $row['idUser'] == $_SESSION['idUser']){
          print('<tr style="background-color: yellow">');
        }
        else{
          print('<tr>');
        }
      ?>
          <td>
            <?php
            echo $count;
            ?>
          </td>
          <td>
            <?php
            echo $row['nickname'];
            ?>
          </td>
          <td>
            <?php
            echo $row['score'];
            ?>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</main>
</div>
<?php
mysqli_close($con);
?>