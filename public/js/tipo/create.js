let formTipos = document.getElementById('formTipos')

formTipos.addEventListener('submit', (e) =>{
    e.preventDefault()
    let data = new FormData(formTipos)
    fetch('http://127.0.0.1:8000/api/directorios',{
        method: 'POST',
        body : data
    })
})