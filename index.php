<?php
	require_once("connexion.php");

	$resultat = $pdo->prepare("SELECT * FROM game");
	$resultat->execute();
	$game = $resultat->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
		print_r($game);
	echo '</pre>';
	
