<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /html');
  }
  require 'database.php';

  if (!empty($_POST['Pers']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, Pers, password FROM users WHERE Pers = :Pers');
    $records->bindParam(':Pers', $_POST['Pers']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: html");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
<title>Control system</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
<link rel="stylesheet" href="Fonta\css\all.css" >
<link rel="stylesheet" href="css/styles.css">
</head>
  <body id="lobby">


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    	  <form class="formulario" method="post" action="login.php">

        <h1>Welcome</h1>
         <div class="contenedor">



             <div class="input-contenedor">
             <i class="fas fa-crown icon"></i>
             <input type="text" placeholder="User" name="Pers">

             </div>

             <div class="input-contenedor">
             <i class="fas fa-lock icon"></i>
             <input type="password" placeholder="Password" name="password">

             </div>
             <input type="submit" value="Login" class="button">
         </div>
        </form>
    </body>
    </html>
