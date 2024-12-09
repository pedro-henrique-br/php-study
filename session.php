<?php 

session_start();
echo "your session id = " . session_id();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>name</title>
</head>
<body>
  <form method="post" action="submit">
    <label>
      <h4>Insert your name below</h4>
      <input type="text" name="name" placeholder="Jonh Snow" required>
    </label>
    <button type="submit">Enviar</button>
  </form>
  <?php 
    if(isset($_GET['name'])){
      echo $_GET["name"];
    }
  ?>
</body>
</html>

