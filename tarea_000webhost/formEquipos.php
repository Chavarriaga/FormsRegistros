<?php include "./includes/conexion.php";?>
<?php include "./includes/funciones.php";?>
<?php showAllData() ?>
<?php Insert_Datos()?>   

<!--el fragmento de código inicial que contiene todos los links de bootstrap se encuentra en la página oficial de bootstrap en la seccion starter template y sirve para poder llamar las clases de las librerias en el documento html-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Links Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>FORMULARIO EQUIPOS</title>
  </head>
  <body>

    <h1>Formulario Equipos</h1>
    <!--clase contenedor, como su nombre lo dice crea un contenedor con margen para agrupar columnas. las columnas tienen un máximo de 12, luego del contenedor van las clases row-->
    <div class="container">
        <form class="row g-3 needs-validation" novalidate action="formEquipo.php" method="POST">
        <div class="col-md-12">
            <label for="id_equipos" class="form-label">Id Equipos</label>
            <div class="form-group">
            <input type="text" name="id_equipos" id="id_equipos">

            <br>
            <div class="col-md-8">
                <label for="nombre_sede" class="form-label">NOMBRE SEDE</label>
                <input type="text" class="form-control" name="nombre_sede" id="nombre_sede" placeholder="Ingrese el nombre de la sede" required>
              

            <div class="col-md-4">
            <label for="direccion" class="form-label">DIRECCIÓN</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese Dirección" required>
            <div class="valid-feedback">

            </div>
        </div>
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-8">
                <label for="telefono" class="form-label">TELEFONO</label>
                <input type="text" class="form-control" name="telefono" id="telefono" required>
                <div class="invalid-feedback">
                
                </div>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label">ESTADO</label>
                <select class="form-select" name="estado" id="estado" required>
                <option selected disabled value="">Elige una opcion</option>
                <option>Disponible</option>
                <option>Mantenimiento</option>
                </select>
                <div class="invalid-feedback">

            </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <div class="col-6">
            <button class="btn btn-primary" name="formEquipos" type="submit">Enviar Datos</button>
        </div>
        <div class="col-6">
                <button class="btn btn-primary" type="submit" ><a href="index.php" style="color: Black;">Regresar a Lista de Formularios</a></button>
        </div>

    </div>
        </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>