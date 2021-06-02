let formEditar = document.getElementById('editarTipo')
let txtDescripcionTipo = document.getElementById('txtDescripcionTipo').value
let idTipo = document.getElementById('txtIdTipo').value

formEditar.addEventListener('submit', (e) => {
    e.preventDefault()

    data = new FormData(formEditar)
    let url = 'http://127.0.0.1:8000/api/tipos'

    fetch(`${url}/${idTipo}`,{
        method : 'PUT',
        body : JSON.stringify({
            descripcion:'Testeooo'
        })
    })
    .then(res => res.json())
    .then(response => {
        console.log(response)
    })
})
