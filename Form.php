<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header >
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Libros disponibles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Author.php">Autores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Form.php">Formulario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacts.php">Contacto</a>
            </li>
          </ul>
      </header>

      <div class="container-form">
        <form action="sendForm.php" method="post">
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="fecha" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Asunto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="asunto" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Asunto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
            </div>
            <div>
              <input type="submit" class="btn btn-primary">
            </div>
        </form>
      </div>
</body>
</html>