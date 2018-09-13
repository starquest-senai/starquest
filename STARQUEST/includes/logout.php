<?php
/**
 * Created by PhpStorm.
 * User: marcomauricio
 * Date: 09/09/2018
 * Time: 01:08
 */

session_start();
unset($_SESSION);
session_destroy();

header("location:../index.php");

?>