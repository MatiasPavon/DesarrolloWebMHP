<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloz.css">
</head>
<body>
    <div class="contenedor">
        <div class="encabezado">
            <div class="logo">
                <img id="escudo" src="imagenez/usfx.png" alt="">
            </div>
            <div class="titulo">
                <p class="roj">UNIVERSIDAD DE SAN FRANCISCO XAVIER</p>
                <div class="azul">FACULTAD DE TECNOLOGIA SUCRE-BOLIVIA <br></div>
                Carrera: Ing. de Sistemas <br>
                    Semestre 2-2022
            </div>
            <div class="logo2">
                <img id="escudo2" src="imagenez/tecnologia.png" alt="">
            </div>
        </div>
        <div class="aa">A</div>
        <div class="blanco1"></div>
        <div class="bb">B</div>
        <div class="blanco2"></div>
        <div class="cc">C</div>
        <div class="blanco3"></div>
        <div class="dd">D</div>
        <div class="blanco4"></div>
        <div class="ee">E</div>
        <div class="blanco5"></div>
        <div class="lista">
            <ul class="menuvertical">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="ejercicio2.html">Pregunta 2</a></li>
                <li><a href="formularioIntercalada.html">Pregunta 3</a></li>
                <li><a href="votacion.html">Pregunta 4</a></li>
            </ul>
        </div>
        <div class="contenido">
            <p>Bienvenido al</p>
        </div>
        <div class="info">
            <p>Alumno:</p>
            <p>Matias Hector Pavon</p>
            <p>Carrera:</p>
            <p>Ing de Sistemas</p>
            <img src="imagenez/estudiante.png" alt="" width="200px" heigth="200px" >
        </div>
        <div class="usted">
            <p>Usted ingreso a esta pagina:</p>
        </div>
        <div class="rosa">
        <?php 
if (isset( $_COOKIE['contador'] ) ) {
	$valor=$_COOKIE['contador']+1;
	echo "$valor";
	setcookie("contador",$valor,0); /* expira en 1 hora */
	}
else 
	{
    echo "1";	
    setcookie("contador",1,0); /* expira en 1 hora */ 
	}
?> 
        </div>
        <div class="veces">
            <p>veces</p>
        </div>
        <div class="pie">
            <b>Año 2022</b>
        </div>
    </div>
</body>
</html>