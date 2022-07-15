<?php
    include("ClassBooks.php");
    $listTitles = new Title();
    $showTitles = $listTitles -> showTitle();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Libreria</title>
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

    <div class="container-books-available">
      <h4 class="title">Libros Disponibles</h4>
    <?php
            foreach ($showTitles as $row) {
          ?>
         <div class="card" style="width: 22rem;">
        <div class="card-body">
          <h6 class="card-title"><?php echo $row['titulo'] ?></h6>
          <div>
            <b>Precio: </b> <p class="card-text"> <?php echo $row['precio'] ?>$</p>
          </div> 
          <div>
           <b>Tipo: </b> <p class="card-text"> <?php echo $row['tipo'] ?> </p>
          </div>
          <div>
           <b>Descripcion: </b> <p class="card-text"> <?php echo $row['notas'] ?> </p>
          </div>
          <div>
            <b>Fecha Publicada: </b> <p class="card-text"> <?php echo $row['fecha_pub'] ?> </p>
          </div>

          
        </div>
      </div>
       <?php
       
        }
       ?>
     

    </div>
</body>
<style>
  .container-books-available{
    padding: 20px;
    margin-top: 20px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.container-books-available .title{
    width: 100%;
    text-align: center;
    margin-bottom: 20px
}

.container-books-available .card{
    margin: 15px 5px;
    box-shadow: 0px 1px 5px #999;
    padding: 10px
}
.container-books-available .card-body div{
    display: flex;
    flex-wrap: wrap;
    align-items: baseline
}
.container-books-available .card p{
    margin: 5px 0px !important;
    font-size: 12px
}
.container-books-available .card b{
    margin-right: 5px !important;
    font-size: 14px
}
.container-books-available .card-title{
    text-transform: uppercase;
    font-size: 14px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
}
.container-books-available .card-text{
    text-transform: uppercase;
    font-size: 14px;
}
</style>
</html>