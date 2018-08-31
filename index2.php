<html>

<head>

</head>

<body>

<pre>
<?php

include_once("includes/banco_de_dados.php");

$arrayUsuarios = select("SELECT * FROM usuarios");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Identificador</th>";
echo "<th>Nome</th>";
echo "</tr>";

foreach($arrayUsuarios as $key=>$value){
	echo "<tr><td>".$value["idusuario"]."</td>";
	echo "<td>".$value["nome"]."</td></tr>";
}

echo "</table>";
?>

</pre>



</body>

</html>