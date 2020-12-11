<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 p-3 fondo">
            <h1 class="mt-5 text-center">FORMULARIO</h1>
            <form action="" method="post" class="mx-5 mt-5">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombres" name="nombre" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellido" required="required">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Edad" name="edad" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Example@gmail.com" name="email" required="required">
                </div>
                <div class="d-flex justify-content-center my-4 ">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>