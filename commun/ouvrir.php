<?php 
	// Initialisation de la connexion
	
	$liaison = mysqli_connect("127.0.0.1","andalossi","simo*394") or die ("Acc�s � la base de donn�e impossible !!!");
	mysqli_select_db($liaison, "bd_gestion") or die ("Acc�s � la base de donn�e impossible !!!");
	
?>