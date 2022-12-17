
    function ocultar() {
        document.getElementById("titulo").innerHTML="Estudiante: Matias Hector Pavon &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CU: 35-4857 ";
        var titulo=document.getElementById("titulo");
        titulo.addEventListener("click",function(){
            document.getElementById("titulo").innerHTML="Estudiante: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CU:  ";
        });
    }
    

    function pregunta2(){
        document.getElementById("titulo").innerHTML = "Pregunta 2 DOM Javascript";
        
    }

function ingresarLibro(){
    var titulo = document.getElementById("titulo").value;
    var autor = document.getElementById("autor").value;
    var editorial = document.getElementById("editorial").value;
    var anio = document.getElementById("anio").value;
    var usuario = document.getElementById("usuario").value;
    var carrera = document.getElementById("carrera").value;
	xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if (this.readyState==4 && this.status==200){
			document.getElementById("mensaje").innerHTML=this.responseText;
		}
	};
	
	var parametros="titulo="+titulo+"&autor="+autor+"&editorial="+editorial+"&anio="+anio+"&usuario="+usuario+"&carrera="+carrera;
	xhttp.open("POST","insertar.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(parametros);
}

function cargarPagina(pagina){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", pagina, true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function pregunta3(pagina){
    document.getElementById("titulo").innerHTML = "Pregunta 3 Insertar en Ajax";
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", pagina, true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cantidad(){
    var cantidad = document.getElementById("cantidad").value;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if(ajax.readyState == 4){
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.open("get", 'introducir.php?cantidad='+cantidad, true);
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function resultado(){
    var total = 0;
    var cantidad = document.getElementById("cantidad").value;
    for(var i=0; i<cantidad; i++){
        total += parseInt(document.getElementById("numero"+i).value);
    }
    
    var resultado = document.getElementById("resultado");
    resultado.innerHTML = "El resultado es: "+total;
}


function cargarPaginaFetch(abrir) {    
	var contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}