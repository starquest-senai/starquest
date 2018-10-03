<?php
/**
 * Created by PhpStorm.
 * User: marcomauricio
 * Date: 05/09/2018
 * Time: 21:49
 */

//CONECTA COM A BASE DE DADOS
$conexao = mysqli_connect("localhost", "root", "", "db_starquest");

if(!$conexao) die("Erro ao se conectar com o banco de dados (conexao.php).");
?>