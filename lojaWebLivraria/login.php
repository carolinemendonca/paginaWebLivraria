<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $alterar = $_POST['entrar'];

  $senha = md5($_POST['senha']);
  $connect = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("usuario");
   
    if (isset($entrar)) {             
      $query = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("Erro ao buscar usuario.");
        if (mysql_num_rows($query)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
         
     if (isset($alterar)) {             
      $query = mysql_query("UPDATE usuario SET login = '$login', senha = '$senha'") or die("Erro ao alterar usuario.");
        if (mysql_num_rows($query)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }
    }
?>


