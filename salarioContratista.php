<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salario contratista</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="menu"> <div id="contratista"><a href="salarioContratista.php">Contratista</a></div><div id="planta"><a href="salarioPlanta.php">Planta</a></div> </div>

	<h2>Calcular el salario del contratista</h2>
	<form action="Resultado.php" method="post">
		Id empleado:<br>
		<input type="text" name="id" value="" placeholder="id">
		<br>
		Nombre Empleado:<br>
		<input type="text" name="nombre" value="" placeholder="nombre">
		<br>
		Cargo:<br>
		<input type="text" name="cargo" value="" placeholder="cargo">
		<br>
		Valor horas:<br>
		<input type="text" name="valor_hora" value="" placeholder="Valor hora">
		<br>
		Total horas:<br>
		<input type="text" name="total_horas" value="" placeholder="Total horas">
		<br>
		<br>
		<input type="submit" name="contratista" value="Valor final">
	</form>
	<br>
</body>
</html>