<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloz.css">
    <script src="app.js"></script>
</head>
<body>
    <div class="contenedor">
     
    <img src="images/universidad.png" alt="" width="150" height="100">
    <div class="todo">
    
     <div class="encabezado">
         <div class="inicio">
            <a href="examenfinal.php">Inicio</a>
          </div>
           <div class="lista">
           <a href="javascript:segundaPregunta()">Lista</a>
          </div>
          <div class="horario">
          <a href="javascript:cargarContenidoHorario('horarios.php')">Horarios</a>
           </div>
           <div class="calificacion">
           <a href="javascript:calificaciones()">Calificaciones</a>
           </div>
           <div class="informe">
           <a href="javascript:cargarContenido('informe.html')">Informes</a>
           </div>
     </div>
     <div class="inicio2" id="titulo">
        Inicio
        </div>
    </div >
           
            <div class="todo">
            <div class="asignatura">
                Asignaturas
            </div>
            <div class="Sis">
                <div><button value="SIS256" onclick="asignarMateria('SIS256')" class="boton active">SIS256</button></div>
                <div><button value="SIS258" onclick="asignarMateria('SIS258')" class="boton">SIS258</button></div>
                <div><button value="SIS406" onclick="asignarMateria('SIS406')" class="boton">SIS406</button></div>
                
                    
            </div>

            </div>
            
            <div class="contenido" id="contenido">
                <div class="nombres">
                    <div>
                        <p>Examen final de SIS 256</p>
                        <p>Estudiante:...Matias Hector Pavon...</p>
                        <p>CU:............35-4857..............</p>
                    </div>
                    <div class="semestre">
                        <div class="semestrecito">
                            <p>Semestre</p>
                        </div>
                        <div class="fecha">
                            <p>2/2022</p>
                        </div>
                    </div>

                </div>
            </div>
        
    </div>
</body>
</html>