let formTipos = document.getElementById('formTipos')

formTipos.addEventListener('submit', (e) =>{
    e.preventDefault()
    let data = new FormData(formTipos)
    fetch('http://127.0.0.1:8000/api/tipos',{
        method: 'POST',
        body : data
    })
    .then(res => res.json())
    .then(response => {
        if(response){
            alert("Tipo Contacto Creado")
            location.href = "http://127.0.0.1:8000/tipos"
        }else{
            alert ("Error en la data");
            location.href = "http://127.0.0.1:8000/tipos"
        }
    })
    .catch(function(){
        alert(` 
            Descripcion debe tener entre 5 y 30 caracteres

            -->  O puede ser que ese tipo de contacto ya existe
        `);
    })

})