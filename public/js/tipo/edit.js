let formEditar = document.getElementById('editarTipo')
let txtDescripcionTipo = document.getElementById('txtDescripcionTipo').value
let txtidDescripcionTipo = document.getElementById('txtIdTipo').value


formEditar.addEventListener('submit', (e) => {
    console.log(txtidDescripcionTipo)
    e.preventDefault()
    data = new FormData(formEditar)
    fetch('http://127.0.0.1:8000/api/tipos/'+txtidDescripcionTipo,{
        method : 'PUT',
        body : data
    })
    .then(res => res.json())
    .then(response => {
        if(response.response){
            alert(response.message)
        }else{
            alert(response.message)
        }
    })
})
