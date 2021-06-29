let formDestroy = document.getElementById('borrarTipo')
let IdTipo = document.getElementById('IdTipo').value


formDestroy.addEventListener('submit', (e) => {
    e.preventDefault()
    fetch('http://127.0.0.1:8000/api/tipos/'+IdTipo,{
        method : 'DELETE'
    })
    .then(res => res.json())
    .then(response => {
        if(response){
            alert(response.message)
            location.href = "http://127.0.0.1:8000/tipos"
        }else{
            alert(response.message)
            location.href = "http://127.0.0.1:8000/tipos"
        }
    })
})

