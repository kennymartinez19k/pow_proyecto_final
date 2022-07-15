
<?php
    include("ClassContacts.php");
    $listContact = new Contacts();
    $showContact = $listContact -> showContacts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Correo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Asunto</th>
                <th scope="col">Comentario</th>
              </tr>
            </thead>
            <tbody>
            <?php
              foreach ($showContact as $row) {
            ?>
                
                <!-- <h5><?php echo $row['nombre']; echo " "; echo $row['apellido'] ?></h5> -->
                <tr>
                  <th scope="row"><?php echo $row['id']?></th>
                  <td><?php echo $row['fecha']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['asunto']?></td>
                  <td><?php echo $row['comentario']?></td>
                </tr>

            <?php
       
            }
            ?>
            </tbody>
          </table>
    </div>
</body>
</html>