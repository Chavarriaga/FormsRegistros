    <?php include "./includes/conexion.php"; ?>
    <?php include "./includes/funciones.php";?>
    <?php Insert_Datos(); ?>
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
        <title>Document</title>
        <h1 style="color: white;">Formulario de Usuarios</h1>
        
    </head> 
    <body class="bg-image bg-size-cover" style="background-image: url('pilaresCreacion.jpg'); ">
    <div class="container">

    <!-- El llamado desde bootstrap para insertar una imagen es como la class del body.... en este caso la defino como fondo del body con la propiedad background-img + url dentro de la propiedad style-->
    
        <form class="row g-3 needs-validation" novalidate action="formUsuario.php" method="post">

                <label for="id_usuario" class="form-label h2" style="color: white;">Id Usuarios</label>
                <div class="form-group">
                <input type="text" class="form-control" name="id_usuario" id="id_usuario" placeholder="ID de usuario" required>
                </div>
            <div class="col-md-4">
                <label for="nombre" class="form-label h2" style="color: white;">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de usuario" required>
                <div class="valid-feedback">
                
                </div>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label h2" style="color: white;" >APELLIDO</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                <div class="valid-feedback">
                
                </div>
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label h2" style="color: white;">DIRECCIÓN</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="telefono" class="form-label h2" style="color: white;">TELEFONO</label>
                <input type="text" class="form-control" name="telefono" id="telefono" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-4">
                <label for="correo_electronico" class="form-label h2" style="color: white;">CORREO ELECTRONICO</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" name="correo_electronico" id="correo_electronico" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    
                </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <label for="tipo_usuario" class="form-label h2" style="color: white;">TIPO DE USUARIO</label>
                <select class="form-select" name="tipo_usuario" id="tipo_usuario" required>
                <option selected disabled value="">ELIGE UNA OPCION</option>
                <option>Profesor</option>-
                <option>Administrativo</option>
                </select>
                <div class="invalid-feedback">
                Please select a valid state.
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
                
                <button class="btn btn-primary" name="formUsuarios" type="submit">Enviar</button>
            </div>
            <div class="col-6">
                <button class="btn btn-primary" type="submit" ><a href="index.php" style="color: lawngreen;">Regresar a Lista de Formularios</a></button>
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