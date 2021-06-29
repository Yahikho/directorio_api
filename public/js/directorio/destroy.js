let formDestroy = document.getElementById('elimianrDirectorio')
let IdDirectorio = document.getElementById('idDirectorio').value


formDestroy.addEventListener('submit', (e) => {
    e.preventDefault()
    fetch('http://127.0.0.1:8000/api/directorios/'+IdDirectorio,{
        method : 'DELETE'
    })
    .then(res => res.json())
    .then(response => {
        if(response){
            alert('Directorio eliminado')
            location.href = "http://127.0.0.1:8000/directorios";
        }else{
            alert('Solicitud no aprobada')
        }
    })
    .catch(function(){
        alert("Error de respuesta");
    })
})

