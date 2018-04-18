<!DOCTYPE html>
<meta charset="utf-8">
	<?php 
     $con=mysqli_connect("localhost","root","","datosbd") or die ("ERROR");
	 ?>
<html>
<head>
	<title class="Titulo">Sistema Crud</title>
	<meta charset="utf-8">	
</head>
<body>
<form  method="POST" action="formulario.php">	
<label for="">Nombre</label><br>
<input type="txt" name="nombre"><br>
<label for="">Edad</label><br>
<input type="txt" name="edad"><br>
<label for="">Sexo</label><br>
<input type="txt" name="sexo"><br>
<label for="">ID_cargo</label><br>
<input type="txt" name="cargo"><br>
<label for="">Fecha de Nacimiento</label><br>
<input type="date" name="fn"><br>
<input type="submit" name="enviar" value="ingresar">

</form>

<?php 
if (isset($_POST['enviar'])) {
	
  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $sexo=$_POST['sexo'];
  $cargo=$_POST['cargo'];
  $fn=$_POST['fn'];

$insetar="INSERT INTO persona (Nombre,edad,Sexo,Id_cargo,naciemiento) VALUES ('$nombre','$edad','$sexo','$cargo','$fn')";
 
 $ejecutar=mysqli_query($con,$insetar);
}



 ?>
</body>
</html>
