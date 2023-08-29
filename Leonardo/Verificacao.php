<?php
$email = $_POST['email'];
$senha = $_POST['password'];
$array = $_POST['cadastro.html'];
$entrar = $_POST['Entrar'];

 if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo Email deve ser preenchido');
    window.location.href='index2.html';</script>
 
    if($senha == "" || $senha == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo Senha deve ser preenchido');
    window.location.href='index2.html';</script>";
 }else{
      if($email == $array && $senha == $array){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');
        window.location.href='cadastro.html';</script>";
        die();
}

 if (isset($entrar)) {

    $verificador = mysql_query("SELECT * FROM pessoas WHERE email =
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verificador)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='index2.html';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("Location:index.html");
      }
  }

?>
