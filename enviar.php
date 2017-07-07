<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$suma = $num1 * $num2;
		echo "La multiplicación de ".$num1." y ".$num2." es ".$suma. "\n"; 
	}
$to = "software.realize.101@gmail.com";
$subject = "Juan María Vianney Uribe García";
$message = "La suma de ".$num1." y ".$num2." es ".$suma." \n"
. "La direccion publica del repositorio: https://github.com/juanhock/webphp.git  \n"
. "La direcion del sitio web es: https://juanmgarcia.000webhostapp.com/  \n";
$bool = mail($to, $subject, $message);
if($bool){
    echo "Mensaje enviado con exito.";
}else{
    echo "Mensaje no enviado";
}
?>