let tblDirectorios = document.getElementById('tblDirectorios');
let tblBodyDirectorios = document.getElementById('tblBodyDirectorios');

fetch('http://127.0.0.1:8000/api/directorios',{
    method: 'get'
})
.then(res => res.json())
.then(respounse =>{

    for(var i in respounse){

        respounse[i].forEach(element => {
            let fila = document.createElement('tr')

            let casilla = document.createElement('td')
            casilla.innerText = element['nombre']
            fila.appendChild(casilla)

            casilla = document.createElement('td')
            casilla.innerText = element['descripcion']
            fila.appendChild(casilla)

            casilla = document.createElement('td')
            casilla.innerText = element['telefono']
            fila.appendChild(casilla)

            casilla = document.createElement('td')
            casilla.innerText = element['email']
            fila.appendChild(casilla)

            casilla = document.createElement('td')
            casilla.innerText = element['direccion']
            fila.appendChild(casilla)

            tblBodyDirectorios.appendChild(fila)
        });

        tblDirectorios.appendChild(tblBodyDirectorios)

    }

})