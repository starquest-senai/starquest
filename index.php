<html>

<head>

<style>

#totalGeral{
	color: red;
	
	
}
#produto{
	
	color: blue;
}

</style>

</head>

<body>
<pre>
<?php
$arrayProdutos[0] = array('nomeProduto'=>'Macarrão', 'quantidadeEstoque'=>2, 'valorUnitario'=>9.9);
$arrayProdutos[1] = array('nomeProduto'=>'Feijão', 'quantidadeEstoque'=>10, 'valorUnitario'=>2.9);
$arrayProdutos[2] = array('nomeProduto'=>'Maçã', 'quantidadeEstoque'=>4, 'valorUnitario'=>1.2);



$arrayCompras["Maria"][0] = array('idProduto'=>0,'qtd'=>1);
$arrayCompras["Maria"][1] = array('idProduto'=>1,'qtd'=>2);
$arrayCompras["Maria"][2] = array('idProduto'=>2,'qtd'=>9);

$arrayCompras["Jose"] = array(array('idProduto'=>0,'qtd'=>2),array('idProduto'=>1,'qtd'=>3),array('idProduto'=>2,'qtd'=>7));

print_r($arrayProdutos);
//print_r($arrayCompras);

echo "<h1>Estoque Inicial</h1>";
foreach($arrayProdutos as $idProduto=>$arrayProd){
	echo "<span id='produto'>Produto: </span> {$arrayProd['nomeProduto']}<br>";
	echo "<span id='produto'>Quantidade: </span> {$arrayProd['quantidadeEstoque']}<br>";
	echo "<span id='produto'>Valor Unitário: </span> {$arrayProd['valorUnitario']}<br>";
	echo "<br>";
}
echo "<h1>Compras</h1>";

foreach($arrayCompras as $key=>&$value){
	echo "<h3>Cliente {$key} </h3>";
	$total = 0;
	foreach($value as $idCompra => &$compra){
		
		
		$arrayP = &$arrayProdutos[$compra['idProduto']];
		
		if(isset($arrayP)){
			
			$compra['total'] = $compra['qtd'] * $arrayP['valorUnitario'];
			$arrayP['quantidadeEstoque'] -= $compra['qtd'];
			?><span id='produto'>Produto: </span><?php
			echo $arrayP['nomeProduto'];
			?><br><span id='produto'>Quantidade: </span><?php
			echo $compra['qtd'];
			?><br><span id='produto'>Total: </span><?php
			echo $compra['total'];
			echo "<br><br>";
			$total += $compra['total'];
		}
	}
	echo "<span id='totalGeral'>Total geral da compra: {$total}</span>";
	echo "<br><br>";
}

echo "<h1>Estoque Final</h1>";
foreach($arrayProdutos as $idProduto=>$arrayProd){
	echo "<span id='produto'>Produto: </span> {$arrayProd['nomeProduto']}<br>";
	echo "<span id='produto'>Quantidade: </span> {$arrayProd['quantidadeEstoque']}<br>";
	echo "<span id='produto'>Valor Unitário: </span> {$arrayProd['valorUnitario']}<br>";
	echo "<br>";
}



//print_r($arrayProdutos);
//print_r($arrayCompras);

?>

</pre>
</body>

</html>