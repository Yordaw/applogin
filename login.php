<?php
$user = $_POST["user"];
$password = $_POST["password"];
?>

<html>
  <head></head>
  <body>
    <table border="1";>
      <tr>
        <td>Usuari</td><td><?php echo $user ?></td>
      </tr>
      
      <tr>    
        <td>Contraseña</td><td><?php echo $password ?></td>       
      </tr>
    </table>
</body>
</html>
