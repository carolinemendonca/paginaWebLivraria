<?php

include("menu.html");

$login = $_GET['login'];

$link = mysql_connect("localhost", "root", "");
mysql_select_db("usuarios");

$query = "DELETE FROM usuarios WHERE login='$login'";
echo "DELETAR: $query<br><hr>";
mysql_query($query);
mysql_close($link);

?>
