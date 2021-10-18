var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click',()=>{
    var peticion = new XMLHttpRequest(); //peticion a ajax creada
    //peticion.open('GET', 'https://api.json-generator.com/templates/hDfATK-_s6ZC/data?access_token=ix0kybauda4yp67mqh3htoe96edmisph8noae5q4');
    peticion.open('GET', 'php/usuarios.php');

    loader.classList.add('active');

    peticion.onload = function(){//Cuando cargan la info que cargue datos
        var datos = JSON.parse(peticion.responseText); //carga los objetos en texto Y los comvierte a jsonObjects
        datos.forEach(persona => {
            var elemento= document.createElement('tr');
            elemento.innerHTML += ("<td>"+persona.id+"</td>");
            elemento.innerHTML += ("<td>"+persona.nombre+"</td>");
            elemento.innerHTML += ("<td>"+persona.edad+"</td>");
            elemento.innerHTML += ("<td>"+persona.pais+"</td>");
            elemento.innerHTML += ("<td>"+persona.correo+"</td>");
            document.getElementById('tabla').appendChild(elemento);
        });
    }

    peticion.onreadystatechange = function(){//funcion se ejecuta cada que l afuncion cambnien cuanod envio y resivo peticion 

        if(peticion.readyState == 4 && peticion.status == 200){ //4 es el numero de cambios, 2 peticion resivida 3 peticion procesandose 4 peticion finalizada y repsuetsa lista
            loader.classList.remove('active');                                                    //200 si todo esta correcto - similar a un estado 404
                                                                // If sirve para ver is la peticion y la pagina son correctos    
        }

    }

    //peticoon a ajax enviada muy importante.
    peticion.send();

});