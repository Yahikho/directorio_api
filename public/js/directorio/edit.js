//let formEditarContacto = document.getElementById('formDirectorios')
let idDirectorio = document.getElementById('idDirectorio').value
// let data = {
//     'id_tipo_contacto'    : 3,//document.getElementById('selectTipoContacto'),
//     'nombre'              : document.getElementById('nombre').value,
//     'telefono'            : document.getElementById('telefono').value,
//     'email'               : document.getElementById('email').value,
//     'direccion'           : 364894//document.getElementById('direccion').value
// }
//console.log(data)
let y = {
    test:'cla'
}

    fetch('http://127.0.0.1:8000/api/directorios/'+idDirectorio,{
        method : 'PUT',
        body : y
    })
    .then(res => res.json())
    .then(response => {
        console.log(response)
    })
    //.catch(error => console.error('Error:', error))
    //.then(response => console.log('Success:', response));
