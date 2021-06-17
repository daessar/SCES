

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Antecedentes</title>
</head>
<body>
  <div class="container">
    <h1>Método de búsqueda</h1>
      <div class="btngrupo">
      <button type="button" class="btn btn-outline-warning" onclick="buscarficha()">Buscar por Ficha</button>
      <div class="form-group">
          <label id="labuscar1">Ingrese la Ficha </label>
          <input type="number" class="form-control" id="buscar1">
          <button type="button" class="btn btn-outline-warning" id="aceptar" onclick="aceptar1()">Aceptar</button>
          <label id="buscarapren">Aprendices</label>
          <select class="form-select form-select-sm" id="apr">
          <option value="1">Jorge Rojas</option>
          <option value="2">Juana Cruz</option>
          <option value="3">Sol Ruiz</option>
          <option value="4">Lila Zuluaga</option>
         </select>
      </div>
       
      </div>
      <br>
      <div class="btnaprendiz">
      <button type="button" class="btn btn-outline-warning" onclick="buscaraprendiz()">Buscar por Aprendiz</button>
      <div class="form-group">
          <label id="labuscar2">Ingrese Documento del Aprendiz </label>
          <input type="text" class="form-control" id="buscar2">
          <button type="button" class="btn btn-outline-warning" id="aceptar2" onclick="aceptar22()">Aceptar</button>
          <table class="table table-striped" id="tabla">
              <thead>
              <tr style="font-size: 1.5em;">
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Ficha</th>
              </tr>
              <tr>
                <td>100234567</td>
                <td>Jorge</td>
                <td>Rojas</td>
                <td>209834</td>
                <td>
              </td>
              </tr>

          </table>
        </div>
      </div>
      </div>
 
 
</body>

<script>

document.getElementById("aceptar").style.display="none";
document.getElementById("labuscar1").style.display="none";
document.getElementById("buscar2").style.display="none";
document.getElementById("buscarapren").style.display="none";
document.getElementById("apr").style.display="none";
document.getElementById("buscar1").style.display="none";
document.getElementById("buscar2").style.display="none";
document.getElementById("labuscar2").style.display="none";
document.getElementById("aceptar2").style.display="none";
document.getElementById("tabla").style.display="none";




function buscarficha(){
document.getElementById("aceptar").style.display="block";
document.getElementById("labuscar1").style.display="block";
document.getElementById("buscar1").style.display="block"; 
}
function aceptar1(){
  document.getElementById("buscarapren").style.display="block";
  document.getElementById("apr").style.display="block";

}
function buscaraprendiz(){
    document.getElementById("buscar2").style.display="block";
    document.getElementById("labuscar2").style.display="block";
document.getElementById("aceptar2").style.display="block";
     
}
function aceptar22(){
  document.getElementById("tabla").style.display="block";

  

}


</script>


</html>
 