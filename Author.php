
<?php
    include("ClassAuthor.php");
    $listAuthors = new Authors();
    $showAuthors = $listAuthors -> showAuthors();

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
      <div class="container-author">
        <h4 class="title">Autores</h4>

      <?php
          foreach ($showAuthors as $row) {
      ?>
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <img src="./img/Author.png" alt="">
           
          <h5><?php echo $row['nombre']; echo " "; echo $row['apellido'] ?></h5>
          <div>
           <b>Telefono: </b><p> <?php echo $row['telefono']?></p>
          </div>
          <div>
            <b>Direccion: </b><p> <?php echo $row['direccion']; echo " "; echo $row['ciudad']; echo " ";  echo $row['pais']?></p>
          </div>
          </div>
        </div>
      <?php
       
      }
      ?>
      </div>
</body>
<style>
    .container-author{
        justify-content: space-between
    }
    .card{
      margin: 20px 0px !important
    }
    .card-body div{
      width: 100%;
      display: flex
    }
    .card-body b{
      margin-right: 5px
    }
    .card-body h5{
      margin-top: 10px;
      margin-bottom: 20px
    }
    .title{
      width: 100%;
    text-align: center;
    margin-bottom: 20px
    }
</style>
</html>