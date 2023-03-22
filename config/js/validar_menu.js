//validacion de agregar menu
function validar_agregar_menu(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite el nombre del plato','', 'error')
        form.nombre.focus();
        return(false);
    }

    else if(form.imagen.value.length==0){
        swal.fire('Inserte una imagen en el campo','', 'error')
        form.imagen.focus();
        return(false);
    }

    else if(form.descripcion.value.length==0){
        swal.fire('Digite la descripcion del plato','', 'error')
        form.descripcion.focus();
        return(false);
    }
   var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);
    
}

//validacion de modificar el nombre del menu
function validar_modificar_menu_nombre(form){

    if(form.nombre.value.length==0){
        swal.fire('Modifique el nombre del plato','', 'error')
        form.nombre.focus();
        return(false);
    }

    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion de modificar la descripcion del menu
function validar_modificar_menu_descripcion(form){

    if(form.descripcion.value.length==0){
        swal.fire('Digite la descripcion del plato','', 'error')
        form.descripcion.focus();
        return(false);
    }
    
    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);
}

//validacion de modificar la imagen del menu
function validar_modificar_menu_imagen(form){
    if(form.imagen.value.length==0){
        swal.fire('Inserte una imagen en el campo','', 'error')
        form.imagen.focus();
        return(false);
    }
                    
    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion eliminar menu
function validar_eliminar_menu(form){

    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}