<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$suma = $num1 
		+ $num2;
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
        // echo "El correo ha sido enviado";
	}
//------------------correo




$to = "juanhock2@gmail.com";
$subject = "Juan María Vianney Uribe García";
$message = "La suma de ".$num1." y ".$num2." es ".$suma; 

 
mail($to, $subject, $message);

/*$bool = mail($to, $subject, $message);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
*/
?>