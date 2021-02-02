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
<html lang="es">
<meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Control system</title>
        <script src="js/jquery-1.9.1.js"></script>
          <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    </head>
    <body>
      <?php if(!empty($user)): ?>
      <a href="Fast.php"><img src="images\ManualMode.png" height="100" width="300"></a>
      <div class="formularioo">

<img src="images/configcontrol.png" height="360" width="640">

<a href="logout.php">
   <input   class="button" value="                                                    Logout">

















        <script type="text/javascript">
        var estado="";
        $(function(){
        $("#avanza").click(function(){
            window.estado=1;
        });
        $("#izquierda").click(function(){
            window.estado=2;
        });
        $("#derecha").click(function(){

            window.estado=3;
        });
        $("#retrocede").click(function(){

            window.estado=4;
        });
        $("#parar").click(function(){

            window.estado=5;
         });










        $(this).click(function(){
           console.log("estado: "+estado);
        	$.ajax({
        		data:{valor_estado: estado},
        		url:'procesa.php',
        		type:'POST',
        		success: function(response){

        		}
        	});
          });

        });
        </script>
        </div>





























      <?php else: ?>
        <?php
        header("Status: 301 Moved Permanently");
        header("Location: /html/login.php");
        exit;
        ?>

      <?php endif; ?>
      </body>
      </html>
