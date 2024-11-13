<?php
$user = $_POST["user"];
$password = $_POST["password"];
?>

/*echo "Tu usuario es ".$user." y tu contraseña es ".$password;*/

<html>
  <table border="1";>
    <tr>Usuari</tr>
    <td><?php $user ?></td>

    <tr>Contraseña</tr>
    <td><?php $password ?></td>
  </table>

</html>
