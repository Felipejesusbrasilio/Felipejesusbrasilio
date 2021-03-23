<?php

if(!$_SESSION['nome']) {
	session_start();
	header('Location: cadastro.php');
	exit();
}