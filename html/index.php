<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, Pers, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>


    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['Pers']; ?>
      <br>correct licenses
      <a href="logout.php">
        Logout
      </a>
      <br>
      <a href="/html/Fast.php">
  continue
      </a>
    <?php else: ?>
      <?php
      header("Status: 301 Moved Permanently");
      header("Location: /html/login.php");
      exit;
      ?>

    <?php endif; ?>
  </body>
</html>
