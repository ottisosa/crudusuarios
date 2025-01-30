window.onload = () => {

    obtenerUsuarios();
}
    
    async function obtenerUsuarios(){

        let  url='http://localhost/PROYECTOS/crudusuarios-octavioSosaIae/REPOSITORIOS/BACKEND/CONTROLADOR/controladorUsuarios.php?funcion=obtener';      
        let consulta = await fetch(url);
        let datos = await consulta.json();
        console.log (datos);
        mostrarUsuarios(datos);
    }
    
    function mostrarUsuarios(usuarios){

        let tbodyElement = document.querySelector("#tablaUsuarios");

        for(let i=0; i < usuarios.length;i++){

            tbodyElement.innerHTML+=`
            <tr>
            <td>${usuarios[i].ci}</td>
            <td>${usuarios[i].nombre}</td>
            <td>${usuarios[i].apellido}</td>
            </tr>
            `;


        }

    }
