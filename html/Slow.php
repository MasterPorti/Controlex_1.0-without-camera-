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
<?php if(!empty($user)): ?>

<!DOCTYPE html>
<html lang="es">
<head>
<link href="images/Logo.ico">
<meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Control system</title>
        <script src="js/jquery-1.9.1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
      <a href="controllerMode.php"><img src="images\controlMode.png" height="100" width="300"></a>

        <div class="formularioo">
          <br><br>
          <br>
          <br>
<img src="images/parar.png">
<a href="Fast.php"><img src="images/fast.png" height="100" width="200"></a>

<img src="images/parar.png">
<img src="images/avanza.png" class="boton" id="avanza">
<br>


<img src="images/parar.png">
<a href="Medium.php"><img src="images/Medium.png" height="100" width="200"></a>
<img src="images/izquierda.png" class="boton" id="izquierda">
<img src="images/parar.png">
<img src="images/derecha.png" class="boton" id="derecha">
<img src="images/parar.png">


<img src="images/SlowON.png" height="100" width="200"></a>
<img src="images/parar.png">
<img src="images/retrocede.png" class="boton" id="retrocede">
<br>

<img src="images/parar.png">
<img src="images/parar.png">
<img src="images/Stop.png" class="boton" id="parar">
<a href="logout.php">
   <input   class="button" value="                                                    Logout">
<script type="text/javascript">
var estado="";
$(function(){
$("#avanza").click(function(){

    window.estado=10;
});
$("#izquierda").click(function(){

    window.estado=11;
});
$("#derecha").click(function(){

    window.estado=12;
});
$("#retrocede").click(function(){

    window.estado=13;
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
			//alert("Salida: "+response );
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
