<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title  -->
  <title>The Last Stand</title>

  <!-- Favicon  -->
  <link rel="icon" href="img/core-img/favicon.ico">

  <!-- Style CSS -->
  <link rel="stylesheet" href="TemplateData/style.css">
  <link rel="stylesheet" href="../static/styles/style.css">
  
  <!-- change this -->
  <!--<style>
    html, body, div.wrapper {
      margin: 0;
      height: 100%;
    }
    .wrapper{
      display: grid;
      grid-template-columns: 1fr 8fr;
      grid-template-rows: 1fr;
      gap: 1rem;
    }
    /* Style the side navigation */
    .content h1 {
      margin-bottom: 1.2rem;
    }

    .sidenav {
      grid-column: 1/2;
      grid-row: 1/2;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
    }


    /* Side navigation links */
    .sidenav a,
    h3.logged {
      color: white;
      padding: 16px;
      text-decoration: none;
      display: block;
    }

    .sidenav h3.logged {
      background-color: #ddd;
      color: black;
    }

    /* Change color on hover */
    .sidenav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Style the content */
    
    .content {
      grid-column: 2/3;
      grid-row: 1/2;
    }
    /*Tables*/ 
    table.scoreTable{
      width: 50%;
      text-align: left;
      font-size: 1.4rem;
      border:none;
      border-collapse: collapse;
      margin-left: auto;
      margin-right: auto;
      }
    table.scoreTable tr:nth-child(even), table.scoreTable th {
      background-color: rgb(210, 210, 210);
    }
    table.scoreTable tr:hover{
      background-color: rgb(255, 248, 214);
    }
  </style>-->
</head>

<body>
  <div class="wrapper">
    <!-- Nav -->
    <nav class="sidenav">
      <div class=navitem>
        <h1>
          <h3><a class="nav-link" href="../index.php">The Last Stand</a></h3>
        </h1>
      </div>
      <div class=navitem>
        <h3><a class="nav-link" href="../score_board.php">Score Board</a></h3>
      </div>
      <?php
      session_start();
      if (isset($_SESSION["logged"])) { ?>
        <div class=navitem>
          <h3><a class="nav-link" href="php/user_logout.php">Logout</a></h3>
        </div>
        <div class=navitem>
          <h3 class="logged">Hello <?php echo $_SESSION["username"] ?></h3>
        </div>
      <?php
      } else { ?>
        <div class=navitem>
          <h3><a class="nav-link" href="user_log.php">Login</a></h3>
        </div>
        <div class=navitem>
          <h3><a class="nav-link" href="user_add.php">Sign Up</a></h3>
        </div>
      <?php
      }
      ?>
    </nav>

    <!-- ***** Header Area End ***** -->