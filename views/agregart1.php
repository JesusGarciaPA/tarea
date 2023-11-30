<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mobiliario Nuevo</title>
</head>
<body>
    <div class="title">
        <h2>Agregar Mobiliario</h2>
    </div>
    <form method="post" action="../php/agregart1.php">
		<div class="two-columns">
			<div class="fields">
				<label for="">Nombre</label>
				<input id="nombre" type="text" name="NOMBRE" maxlenght="15" autocomplete="off" required> 	
			</div>
            <div class="fields">
				<label for="">Descripcion</label>
				<input id="descripcion" type="text" name="DESCRIPCION" maxlenght="50" autocomplete="off" required> 	
			</div>
		</div>
        <div class="two-columns">
			<div class="fields">
				<label for="">Costo</label>
				<input id="costo" type="text" name="COSTO" autocomplete="off" maxlenght=3 required> 	
			</div>
            <div class="fields">
				<label for="">Existencia</label>
				<input id="existencia" type="text" name="EXISTENCIA" autocomplete="off" required> 	
			</div>
		</div>
        <div class="two-columns">
			<div class="fields">
				<label for="">Cantidad</label>
				<input id="cantidad" type="text" name="CANTIDAD" autocomplete="off" required> 	
			</div>
            <div class="fields">
				<label for="">Observaciones</label>
				<input id="observaciones" type="text" name="OBSERVACIONES" autocomplete="off" required> 	
			</div>
		</div>

		<div class="btn">
			<button><input type="submit" value="Añadir Mobiliario"></button>	
		</div>
	</form>
</body>
</html>