let formDirectorios = document.getElementById('formDirectorios')

formDirectorios.addEventListener('submit', (e) =>{
    e.preventDefault()
    let data = new FormData(formDirectorios)
    fetch('http://127.0.0.1:8000/api/directorios',{
        method: 'POST',
        body : data
    })
    .then(res => res.text())
    .then(respounse => {
        console.log(respounse)
    })

})