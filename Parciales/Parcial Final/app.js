var ejercicio = 2;
var asignatura = "SIS256";
var n = 0;

function asignarMateria(materia) {
    asignatura = materia;
    console.log(asignatura);
    if(ejercicio == 2) {
        alumnosLista2(asignatura);
    } else if(ejercicio == 5) {
        mostrarInformes(asignatura);
    }
}

function cargarContenido(abrir) {
    document.getElementById("titulo").innerHTML = "Informes";
    var contenedor = document.getElementById('contenido');
    fetch(abrir)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

function cargarContenidoHorario(abrir) {
    document.getElementById("titulo").innerHTML = "Horarios";
    var contenedor = document.getElementById('contenido');
    fetch(abrir)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

function segundaPregunta() {
    document.getElementById("titulo").innerHTML = "Lista";
    var contenido = document.getElementById("contenido");
    var formulario = '<form action="javascript:alumnosLista()" method="get">' + 
    '<label>Nro de Cuadros</label> <input type="number" name="n" id="n"><br>'+
    '<input type="submit" value="Obtener"></form>';
    contenido.innerHTML = formulario;
}

function alumnosLista() {
    document.getElementById('titulo').innerHTML = "Lista " + asignatura;
    ejercicio = 2;
    n = document.getElementById("n").value;
	var contenedor = document.getElementById('contenido');
	fetch("listarAlumnos.php?n="+n+"&asignatura="+asignatura)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

function alumnosLista2() {
    document.getElementById('titulo').innerHTML = "Lista " + asignatura;
    ejercicio = 2;
	var contenedor = document.getElementById('contenido');
	fetch("listarAlumnos.php?n="+n+"&asignatura="+asignatura)
    .then(response => response.text())
    .then(data => contenedor.innerHTML=data);
}

function agregarInforme() {
    
    document.getElementById('titulo').innerHTML = "Informe " + asignatura;
    ejercicio = 5;
    var formulario = document.getElementById("form-informe");
    var parametros = new FormData(formulario);
    var contenedor = document.getElementById('contenido');
    fetch("crearInforme.php", {body:parametros, method:"POST"})
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}

function mostrarInformes() {
    document.getElementById('titulo').innerHTML = "Informe " + asignatura;
    var contenedor = document.getElementById('contenido');
    fetch("listarInformes.php?asignatura="+asignatura)
        .then(response => response.text())
        .then(data => contenedor.innerHTML=data);
}