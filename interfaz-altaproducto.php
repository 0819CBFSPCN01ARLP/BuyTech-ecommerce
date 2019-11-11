<?php
require("pdo_admin/pdo.php");
$titulo="Alta de productos";
?>

<!DOCTYPE html>
<html>
<?php require_once("est/head.php") ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Producto</title>

</head>

<body class="ml-5 mt-5">
	<form action="agregar-producto.php" method="POST">

		<div>
			<label>Modelo</label>
			<input type="text" name="modelo" >
		</div>

		<div>
			<label>Precio</label>
			<input type="number" name="precio" value="">
		</div>

		<div>
			<label>Descripción de producto:</label> <br>
			<textarea name="descripcion" rows="3" cols="40" value=""></textarea>
		</div>

		<div class="pt-1">
			<label>Marca</label>
			<select class="" name="marca">
				<option value="1">Asus</option>
				<option value="2">HP</option>
				<option value="3">Lenovo</option>
				<option value="4">EXO</option>
				<option value="5">DELL</option>
			</select>
		</div>

		<div>
			<label>Procesador</label>
			<select class="" name="procesador">
				<option value="1">Intel Core i5</option>
				<option value="2">Intel Core i7</option>
				<option value="3">Intel Celeron</option>
				<option value="4">Intel Core 2 DUO</option>
			</select>
		</div>

		<div>
			<label>Pantalla</label>
			<select class="" name="pantalla">
				<option value="1">13"</option>
				<option value="2">14"</option>
			</select>
		</div>

		<div>
			<label>Tamaño de disco</label>
			<select class="" name="disco">
				<option value="1">Asus</option>
				<option value="2">HP</option>
				<option value="3">Lenovo</option>
				<option value="4">EXO</option>
				<option value="5">DELL</option>
			</select>
		</div>

		<div>
			<label>Memoria RAM</label>
			<select class="" name="memoria">
				<option value="1">4 GB</option>
				<option value="2">8 GB</option>
				<option value="3">16 GB</option>
			</select>
		</div>

		<div>
			<label>Stock</label>
			<input type="text" name="precio" value="">
		</div>

		<div>
			<label>Imagen</label>
			<input type="text" name="" value="">
		</div>

		<button type="submit">Guardar Producto</button>
	</form>
</body>

</html>
