<?php
	
	$mysqli = new mysqli("localhost","binkmx_bink_user","8KQgviKcwDL3RhVh","binkmx_bink");
    /*Servidor, usuario, contraseña, bd*/
	
	if(mysqli_connect_errno())
    {    
		echo 'La conexión fallo <br> Error: ', mysqli_connect_error();
		exit();
	}

    mysqli_set_charset($mysqli, "utf8");
	
?>