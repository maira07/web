<?php 
$form_p = array(5);

if (isset($_POST['submit'])) {
	
	$form_p[0]=$_POST["nom_ape"];
	$form_p[1]=$_POST["num"];
	$form_p[2]=$_POST["dire"];
	$form_p[3]=$_POST["asun"];
	$form_p[4]=$_POST["cuerpo"];
}

 ?>