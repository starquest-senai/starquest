<html>

<head>



</head>

<body>

<html>
<body>

<?php
echo phpversion();
session_start();
if(isset($_SESSION["nome"])){
	
	echo $_SESSION["nome"];
}
else
{
	header("location:index2.php");
}
//acabar sessao
//unset($_SESSION["nome"]);

?>
</body>
</html>


</body>

</html>