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
            // let button = document.createElement('button')
            // let form = document.createElement('form')
            // let input = document.createElement('input')


            let casilla = document.createElement('td')
            let ruta = document.createElement('a')
            ruta.setAttribute("href","/tipos/"+element['id'])
            casilla.appendChild(ruta)
            ruta.innerText = element['descripcion']
            fila.appendChild(casilla)

            // casilla = document.createElement('td')
            // form.setAttribute("id","eliminarTipo")
            // input.setAttribute("type","hidden")
            // input.setAttribute("value",element['id'])
            // input.setAttribute("id",'idTipo')
            // button.setAttribute("type","submit")
            // button.innerText = 'Eliminar'
            // form.appendChild(input)
            // form.appendChild(button)
            // casilla.appendChild(form)
            // fila.appendChild(casilla)


            tblBodyTipos.appendChild(fila)

        });

        tblTipos.appendChild(tblBodyTipos)

    }

})

