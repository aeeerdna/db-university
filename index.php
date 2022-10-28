<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpMySql</title>
</head>
<body>
    <!-- apro php -->
    <?php
     // variabili per interagire con database
     define('DB_SERVERNAME', 'localhost:8888');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', 'root');
     define('DB_NAME', 'db-university');

      // connessione database
      $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

      // verifica della connessione
      if($conn && $conn->connect_error){
          echo('Unable to connect, please try again later!!');
          die();
      }
  
      echo('connection ok!');

      // selezione dati    
      $sql = 'SELECT `name`, `address`, `email`, `phone`, `website` FROM `departments` ORDER BY `name`';

      $departments_result = $conn->query($sql);

      if($departments_result && $departments_result->num_rows > 0){
        while($department = $departments_result->fetch_assoc()){

        }
      }elseif($departments_result){
        ?>
        <p>No departments available, i'm sorry!!</p>
        <?php
      }

      else{
        echo('error..');
        die();
      }

    ?>
</body>
</html>