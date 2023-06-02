<?php include "./includes/conexion.php";?>
<?php include "./includes/funciones.php";?>
<?php showAllData() ?>
<?php Insert_Datos()?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Gormulario Prestamost</title>
    <h1>Formulario de Prestamos</h1>
    
</head>
<div class="container">
    <form class="row g-3 needs-validation" novalidate action="formPrestamos.php" method="POST">
            <div>
            <label for="id" class="form-label h1" style="color: lawngreen; font-size: larger;">Id Prestamo</label>
            <div class="form-group">
            <input type="text"name="id_prestamo" id="id_prestamo">
            </div><br>
            <div>
            <label for="id_usuario" class="form-label h1" style="color: blue; font-size: larger;">Id Usuario</label>
            <div class="form-group">
            <select name="id_usuario" id="id_usuario"><?php echo $id_usuario;?></select>
            </div><br>
            <div>
            <label for="id_equipos" class="form-label h1" style="color: blue; font-size: larger;">Id Equipo</label>
            <div class="form-group">
            <select name="id_equipos" id="id_equipos"><?php echo $id_equipos;?></select>
            </div><br>
            <div>
            <label for="id_sede" class="form-label h1" style="color: blue; font-size: larger;">Id sede</label>
            <div class="form-group">
            <select name="id_sede" id="id_sede"><?php echo $id_sede;?></select>
            </div><br>
            <div class="col-md-4">
            <label for="fecha_prestamo" class="form-label h2">Fecha Del prestamo</label>
            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo"  required>
            <div class="valid-feedback">
            
            </div><br>
        </div>
        <div class="col-md-4">
            <label for="fecha_entrega" class="form-label h2" >Fecha  de Entrega</label>
            <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega"  required>
            <div class="valid-feedback">
            
            </div>
        </div><br>
      
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
        </div><br>
        <div class="col-6">
            <button class="btn btn-primary" name="formPrestamos" type="submit">Submit form</button>
        </div>
        <div class="col-6">
                <button class="btn btn-primary" type="submit" ><a href="index.php" style="color: lawngreen;">Regresar a Lista de Formularios</a></button>
        </div>
    </form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>