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
    <title>Estadísticas</title>
    <h1>Formulario de Estadísticas</h1>
    
</head>
<!-- El llamado desde bootstrap para insertar una imagen es como la class del body.... en este caso la defino como fondo del body con la propiedad background-img + url dentro de la propiedad style-->
<body class="bg-image bg-size-cover" style="background-image: url('img26.jpeg'); ">
    <div class="container">
        <form class="row g-3 needs-validation" novalidate action="formEquipo.php" method="POST">
        
            <div class="col-md-12">    
                <div >
                    <label for="id_estadistica" class="form-label h1" style="color: blue; font-size: larger;">Id Estadísticas</label>
                    <div class="form-group">
                   <input type="text" name="id_estadistica" id="id_estadistica">
                </div>
                <div >
                    <label for="id_equipos" class="form-label h1" style="color: blue; font-size: larger;">Id Equipo</label>
                    <div class="form-group">
                    <select name="id_equipos" id="id_equipos"><?php echo $id_equipos;?></select>
                </div>
                <div >
                <label for="id_sede" class="form-label h1" style="color: blue; font-size: larger;">Id sede</label>
                <div class="form-group">
                <select name="id_sede" id="id_sede"><?php echo $id_sede;?></select>
            
        </div>
    </div>   
<div class="container">
    <div class="col-md-12">
        <div class="col-md-6">
            <label for="año" class="form-label h2">AÑO</label>
            <!--En este ejemplo, utilizamos la clase "form-control" para aplicar los estilos de formulario de Bootstrap al input.

            Luego, el atributo "type" se establece como "text" y el atributo "pattern" se establece como "[0-9]{4}", lo que indica que solo se permiten valores numéricos de cuatro dígitos.

            El atributo "maxlength" se establece como "4" para limitar el número de caracteres que se pueden ingresar.-->
            <input type="date" class="form-control" pattern="[0-9]{4}" maxlength="4" name="año" id="año" placeholder="Ingrese el Año" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-8">
            <label for="mes" class="form-label h2" >MES</label>
            <input type="text" class="form-control" name="mes" id="mes" placeholder="Ingrese el mes" required>
            <div class="valid-feedback">
            
            </div>
        </div>
        <div class="col-md-4">
            <label for="cantidad_prestamos" class="form-label">CANTIDAD DE PRESTAMOS</label>
            <input type="text" class="form-control" name="cantidad_prestamos" id="cantidad_prestamos" required>
            <div class="invalid-feedback">
            </div>
        </div>
        <div class="col-md-8">
            <label for="telefono" class="form-label">TELEFONO</label>
            <input type="text" class="form-control" name="telefono" id="telefono" required>
            <div class="invalid-feedback">
            </div>
        </div>
            </div>   
            </div>         
     
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
        <br>
        <div class="container">
            <div class="col-md-12">
            <div class="col-6">
                <button class="btn btn-primary" name="formEstadisticas" type="submit">Enviar Datos</button>
            </div>
        <br>
            <div class="col-6" style="float: right;">
                    <button class="btn btn-primary" type="button" ><a href="index.php" style="color: Black;">Regresar a Lista de Formularios</a></button>
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