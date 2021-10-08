<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Formulario de registro</title>
</head>

<body>

    <form action="request.php" method="POST">
    <h1>
        <center>Bienvenido</center>
    </h1>


    <h2>Ingrese nombre</h2>
    <input type="text" placeholder="Escriba nombre" name="nombrek">


    <h2>Ingrese su correo</h2>
    <input type="email" placeholder="ejemplo@hotmail.com" name="correok">
    <br>
    <br>
    <br>
    
			
			<input type="password" name="clave" required placeholder="Dígite su clave">

    <input type="submit" name="registro">

    </form>

   


</body>

</html>