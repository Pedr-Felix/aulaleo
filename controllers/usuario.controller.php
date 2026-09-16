<?php
function usuarioController(){
  echo "6. Controller recebeu a requisição.<br>";
  $usuarios = usuarioService();
  echo "8. Controller recebeu .<br>";
  echo "Usuarios encontrados:<br>";
  foreach ($usuarios as $usuario) {
    echo "- " .$usuario . "<br>";
  }
}