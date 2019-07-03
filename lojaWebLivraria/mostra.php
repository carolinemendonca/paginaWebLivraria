<?php

include("login.html");

$link = mysql_connect("localhost", "root", "");
mysql_select_db("usuarios");	
	
$query = "SELECT * FROM usuarios ORDER BY login";
$result = mysql_query($query);
echo "SELECT: $query<br>";
echo "<table border=\"1\">";
echo "<tr><td><b>".mysql_field_name($result, 0)."</b></td>";
echo "<td><b>".mysql_field_name($result, 1)."</b></td>";
echo "<td><b>".mysql_field_name($result, 2)."</b></td>";
echo "<td><b>".mysql_field_name($result, 3)."</b></td>";
echo "<td><b>&nbsp;</b></td>";
echo "<td><b>&nbsp;</b></td></tr>";
while ($row = mysql_fetch_row($result)) {
	echo "<tr><td>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$row[2]."</td>";
	echo "<td>".$row[3]."</td>";
}
echo "</table><hr>";

mysql_close($link);

?>
