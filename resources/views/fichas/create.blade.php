<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
<div class="container">
<h1>Nueva Ficha</h1>
<form action="/ficha" method="post" enctype="multipart/form-data">
    <div class=" form-group">
	<div class=" form-group">
		<label for="numeroficha">Número de Ficha</label>
		<input type="number" name="numeroficha" id="numeroficha" class="form-control">
	</div>
		<label for="fechainicio">Fecha Inicio</label>
		<input type="date" name="fechainicio" id="fechainicio" class="form-control">
	</div>
	<div class=" form-group">
		<label for="fechafin">Fecha Fin</label>
		<input type="date" name="fechafin" id="fechafin" class="form-control">
	</div>
    <div class=" form-group">
		<label for="programaFormacion">Nombre del Programa de Formación</label>
		<input type="text" name="programaformacion" id="programaformacion" class="form-control">
	</div>
    
	<button type="submit" class="btn btn-primary">Crear</button>
	
</div>