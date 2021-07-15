

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
  <div class="container" >
    <h3  style="margin-top:10px;">Método de búsqueda</h3>
      <div class="btngrupo">
      <button type="button" class="btn btn-outline-warning" onclick="buscarficha()">Buscar por Ficha</button>
      <div class="form-group" >
          <label id="labuscar1" style="margin:10px;">Ingrese la Ficha </label>
          <div class="input-group mb-3">

            <input type="number" class="form-control" id="buscar1">
            <button type="button" class="btn btn-outline-warning" id="aceptar" onclick="aceptar1()">Aceptar</button>

          </div>
          <label id="buscarapren" style="margin:10px;">Aprendices</label>
          <div class="input-group mb-3">

            <select class="form-select form-select-sm" id="apr">
            <option value="1">Jorge Rojas</option>
            <option value="2">Juana Cruz</option>
            <option value="3">Sol Ruiz</option>
            <option value="4">Lila Zuluaga</option>
           </select>
              <button type="button" class="btn btn-outline-warning" id="buscarapr" onclick="ant()">Buscar</button>
          </div>
          <div class="container" style="background:#BFC9CA;border-radius: 15px; width: 50%;" id="antece">
            <h4 class="text-center">Antecedentes del aprendiz</h4>
            <label for="id" > {{$antecedente->ANT_PK_Id}}</label><br>
            <hr>
            <label for="nombre" >ficha del aprendiz: {{$antecedente->FIC_FK_NumeroFicha}}</label><br>
            <hr>
            <label for="documento" > Documento: {{$antecedente->USU_FK_Usuarios_Aprendiz}} </label><br>
            <hr>
            <label for="correo" > Correo: {{$antecedente->USU_FK_Usuarios_Aprendiz}}</label><br>
            <hr>
            <label for="Telefono" >Telefono del aprendiz...</label><br>
            <hr>
            <label for="programa" > Nombre del programa de formacion del aprendiz...</label><br>
            <hr>
            <div class="input-group mb-3">
              <label for="llamados">llamados de atencion</label>
              <button type="button" class="btn btn-outline-primary" name="button">ir</button>

            </div>
            <hr>
            <label for="condima" > Condicionamiento de matricula del aprendiz...</label><br>
            <hr>
            <label for="estimulos" >Estimulos del aprendiz...</label><br>
            <hr>
            <label for="citaciones" >citaciones del aprendiz...</label><br>
            <hr>
            <button type="button" class="btn btn-outline-danger" style="margin-left:42%;" id="cerrar1" onclick="cerrar1()" >Cerrar</button>
            <hr>

          </div>

      </div>

      </div>
      <br>
      <div class="btnaprendiz">
      <button type="button" class="btn btn-outline-warning" onclick="buscaraprendiz()">Buscar por Aprendiz</button>
      <div class="form-group">
          <label id="labuscar2" style="margin:10px;">Ingrese Documento del Aprendiz </label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="buscar2">
            <button type="button" class="btn btn-outline-warning" id="aceptar2" onclick="aceptar22()">Aceptar</button>
          </div>



          <table class="table table-striped" id="tabla" style="margin:10px;">
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
                <td><a class="btn btn-primary" role="button" onclick="ant2()">ver</a></td>
              </tr>

          </table>
          <div class="container" style="background:#BFC9CA;border-radius: 15px; width: 50%;" id="antece2">
            <h4 class="text-center">Antecedentes del aprendiz</h4>
            <label for="id" > Id del aprendiz...</label><br>
            <hr>
            <label for="nombre" >Nombre del aprendiz...</label><br>
            <hr>
            <label for="documento" > Documento del aprendiz...</label><br>
            <hr>
            <label for="correo" > Correo del aprendiz...</label><br>
            <hr>
            <label for="Telefono" >Telefono del aprendiz...</label><br>
            <hr>
            <label for="programa" > Nombre del programa de formacion del aprendiz...</label><br>
            <hr>
            <div class="input-group mb-3">
              <label for="llamados">llamados de atencion</label>
              <button type="button" class="btn btn-outline-primary" name="button">ir</button>

            </div>
            <hr>
            <label for="condima" > Condicionamiento de matricula del aprendiz...</label><br>
            <hr>
            <label for="estimulos" >Estimulos del aprendiz...</label><br>
            <hr>
            <label for="citaciones" >citaciones del aprendiz...</label><br>
            <hr>
            <button type="button" class="btn btn-outline-danger" style="margin-left:42%;" id="cerrar2" onclick="cerrar2()" >Cerrar</button>
            <hr>
          </div>
        </div>
      </div>
      </div>


</body>

<script>
document.getElementById("antece").style.display="none";
document.getElementById("antece2").style.display="none";
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
document.getElementById("buscarapr").style.display="none";




function buscarficha(){
document.getElementById("aceptar").style.display="block";
document.getElementById("labuscar1").style.display="block";
document.getElementById("buscar1").style.display="block";
}
function aceptar1(){
  document.getElementById("buscarapren").style.display="block";
  document.getElementById("apr").style.display="block";
  document.getElementById("buscarapr").style.display="block";

}
function cerrar1(){
  document.getElementById("antece").style.display="none";
  document.getElementById("aceptar").style.display="none";
  document.getElementById("labuscar1").style.display="none";
  document.getElementById("buscar1").style.display="none";
  document.getElementById("buscarapr").style.display="none";
  document.getElementById("apr").style.display="none"
  document.getElementById("buscarapren").style.display="none";
/*  document.getElementById("buscarapren").style.display="none";
  document.getElementById("apr").style.display="none";
  document.getElementById("buscarapr").style.display="none";*/

}
function cerrar2(){
  document.getElementById("buscar2").style.display="none";
  document.getElementById("labuscar2").style.display="none";
  document.getElementById("aceptar2").style.display="none";
  document.getElementById("tabla").style.display="none";
  document.getElementById("antece2").style.display="none";

}
function buscaraprendiz(){
    document.getElementById("buscar2").style.display="block";
    document.getElementById("labuscar2").style.display="block";
document.getElementById("aceptar2").style.display="block";

}
function aceptar22(){
  document.getElementById("tabla").style.display="block";



}
function ant()
{
  document.getElementById("antece").style.display="block";
}
function ant2()
{
  document.getElementById("antece2").style.display="block";
}


</script>


</html>
