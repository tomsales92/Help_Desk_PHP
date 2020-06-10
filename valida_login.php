<?php

 $usuario_autenticado = false;

  $usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
  );

 /*  echo '<pre>';
  print_r($usuarios_app);
  echo '</pre>'; */

  foreach($usuarios_app as $user){
    if($_POST['email'] == $user['email'] && $_POST['password'] == $user['senha']) {
      $usuario_autenticado = true;
    }

  }

  if($usuario_autenticado) {
    echo 'usuário autenticado com sucesso';
  }else {
    header('Location: index.php?login=erro');
  }

  /* print_r($_POST);
  echo '<br />';
  echo $_POST['email'];
  echo '<br />';
  echo $_POST['password']; */
?>