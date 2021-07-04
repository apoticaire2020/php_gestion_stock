<?php 
	// Initialisation de la connexion
	
	$liaison = mysqli_connect("127.0.0.1","andalossi","simo*394") or die ("Accès à la base de donnée impossible !!!");
	mysqli_select_db($liaison, "bd_gestion") or die ("Accès à la base de donnée impossible !!!");
	
?>