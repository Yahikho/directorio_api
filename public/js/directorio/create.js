let formDirectorios = document.getElementById('formDirectorios')

formDirectorios.addEventListener('submit', (e) =>{
    e.preventDefault()
    let data = new FormData(formDirectorios)
    fetch('http://127.0.0.1:8000/api/directorios',{
        method: 'POST',
        body : data
    })
    .then(res => res.json())
    .then(response => {
        if(response === undefined){
            alert("Nombre o telefono o email ya existen")
        }else{
            alert ("Directorio creado");
            location.href = 'http://127.0.0.1:8000/directorios';
        }
    })
    .catch(function(){
        alert(` 
                1. El nombre debe tener entre 2 y 30 carateres
                2. El telefono debe ser un numero entero positivo entre 6 y 10 carateres
                3. El email debe poseer el carater @ y ser mayor a 5 carateres
                4. La direccion debe estar entre 5 y 30 caracteres

                --> O puede ser Nombre y/o telefono y/o email ya existen
        `);
    })

})