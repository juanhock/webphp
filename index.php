<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Multiplicador Por Juan M Garcia</title>
    <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
</head>
<body>
<H2>Multiplicación de 2 numeros en PHP</H2>
<form action="enviar.php" method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1" onkeypress="return valida(event)"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2" onkeypress="return valida(event)"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="Enviar"> </td>
	</tr>
</table>
</form>
</body>
</html>

