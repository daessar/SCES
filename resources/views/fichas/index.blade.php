<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"></head>
</head>
<div class="container">
<h1>Listado de </h1>
</div>
	@foreach ($fichas as $ficha)
	
	
   <table class="table table-striped" >

   <tr style="font-size: 1.5em;">
      <th scope="col">Numero Ficha</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Nombre Programa</th>
      <th scope="col">Accion</th>
  	</tr>
  	 <tr>
      <td>{{ $ficha->FIC_PK_NumeroFicha}}</td>
      <td>{{ $ficha->FIC_FechaInicio}}</td>
      <td>{{ $ficha->FIC_FechaFin}}</td>
      <td>{{ $ficha->FIC_NombreProgramaFormacion}}</td>
      <td>
      	    <button type="button" class="btn btn-success"><a href="/fichas/{{ $ficha->id }}">Ver</a></button>
			<button type="button" class="btn btn-warning">Modificar</button>
			<button type="button" class="btn btn-danger">Eliminar</button>
  

	  </td>
    </tr>

   </table>


@endforeach