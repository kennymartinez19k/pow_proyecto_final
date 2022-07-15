<?php
    $id = rand(1,100000);;
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $db_name = 'pow_proyecto_final';
    $db_user = 'root';
    $db_pass = 'p@ssw0rd';

    $db = new PDO('mysql: host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "insert into contacto (id, fecha, nombre, email, asunto, comentario) 
    values (?, ?, ?, ?, ?, ?)";
    $stmtInsert = $db->prepare($query);
    $result = $stmtInsert->execute([$id, $fecha, $nombre, $correo, $asunto, $comentario]);
    
?>


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
        <div class="alert alert-success" role="alert">
            <?php
                if($result){
                    echo 'El Contacto fue creado sactifatoriamente, consulte en la tabla de contactos';
                }else{
                    echo 'Ha ocurrido un error';
                }
            ?>
        </div>
    </div>
</body>
</html>