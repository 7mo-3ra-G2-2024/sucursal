<?php 
	require '../Modelos/consultas.php';

	$mesa=filter_input(INPUT_GET, 'ubi');
	echo $mesa;

	estado_mesa(1,$mesa,"libre");
	header("Location:../Vistas/user/menu_pedidos.php");
 ?>