let formDestroy = document.getElementById('borrarTipo')
let txtIdTipo = document.getElementById('txtIdTipo').value


formDestroy.addEventListener('submit', (e) => {
    e.preventDefault()
    fetch('http://127.0.0.1:8000/api/tipos/'+txtIdTipo,{
        method : 'DELETE'
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
