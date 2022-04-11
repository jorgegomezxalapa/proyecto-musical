<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="d-flex justify-content-center">Registro de informacion del artista</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group m-3">
                      <label for="artista_nombre" class="form-label">Nombre del artista</label>
                      <input type="text" class="form-control" id="artista_nombre" placeholder="Ingresa el nombre del artista">
                    </div>
                    <div class="form-group m-3">
                      <label for="artista_fecha_formacion" class="form-label">Fecha de formacion</label>
                      <input type="date" id="artista_fecha_formacion" name="artista_fecha_formacion">
                    </div>
                    <div class="form-group m-3">
                        <label for="artista_genero" class="form-label">Genero</label>
                        <input type="text" class="form-control" id="artista_genero" placeholder="Ingresa el genero del artista">
                      </div>
                      <div class="form-group m-3">
                        <label for="artista_origen" class="form-label">Origen</label>
                        <textarea class="form-control" id="artista_origen" rows="3"></textarea>
                      </div>
                </form>
            </div>
        </div>

    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>