<?php 
 /* 
 * Nosso usuário para ser altenticado
 */
 $usuarios_app = array(
    array("email" => "teste@teste.com", "senha" => "12345"),
    array("email" => "exemplo@exemplo.com", "senha" => "12345")
  );
 
  /*
  * Validação de login 
  */
  foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['password']) {
      header('Location: home.php?login=sucess');
      break;
    } if( !$_POST['email'] && !$_POST['senha'] ) {
      echo "<br/><span style='color: red; font-weight: 600' >**Vai tentar hackear outro**</span>\n <br/>";
      echo "Email do usuario: ";
      print_r($user['email']);
      echo "<br>Senha do usuario: ";
      print_r($user['senha']);
      echo "<br/>";
    }
  }
?>