let tblTipos = document.getElementById('tblTipos')
let tblBodyTipos = document.getElementById('tblBodyTipos')

fetch('http://127.0.0.1:8000/api/tipos',{
    method: 'get'
})
.then(res => res.json())
.then(respounse =>{

    for(var i in respounse){

        respounse[i].forEach(element => {
            let fila = document.createElement('tr')

            let casilla = document.createElement('td')
            let ruta = document.createElement('a')
            ruta.setAttribute("href","/tipos/"+element['id'])
            casilla.appendChild(ruta)
            ruta.innerText = element['descripcion']
            fila.appendChild(casilla)


            tblBodyTipos.appendChild(fila)

        });

        tblTipos.appendChild(tblBodyTipos)

    }

})

