//validacion de agregar menu
function validar_agregar_menu(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite el nombre del plato','', 'error')
        form.nombre.focus();
        return(false);
    }
        var letra="abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
        var cadena=form.nombre.value;
        var valida=true;

        for(i=0;i<cadena.length;i++)
            {
                ch=cadena.charAt(i);
                for(j=0; j<letra.length; j++)
                if(ch==letra.charAt(j))
                break;
                if(j==letra.length)
                {
                    valida = false;
                    break;
                    break;
                }
            }
        if(!valida)
            {
                swal.fire('Digite solo letras en el campo del nombre','', 'error')
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
        var letra="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890";
        var cadena=form.descripcion.value;
        var valida=true;

        for(i=0;i<cadena.length;i++)
            {
                ch=cadena.charAt(i);
                for(j=0; j<letra.length; j++)
                if(ch==letra.charAt(j))
                break;
                if(j==letra.length)
                {
                    valida = false;
                    break;
                    break;
                }
            }
   var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);
    
}

//validacion de modificar menu
function validar_modificar_menu(form){

    if(form.nombre.value.length==0){
        swal.fire('Modifique el nombre del plato','', 'error')
        form.nombre.focus();
        return(false);
    }
        var letra="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
        var cadena=form.nombre.value;
        var valida=true;

        for(i=0;i<cadena.length;i++)
            {
                ch=cadena.charAt(i);
                for(j=0; j<letra.length; j++)
                if(ch==letra.charAt(j))
                break;
                if(j==letra.length)
                {
                    valida = false;
                    break;
                    break;
                }
            }
        if(!valida)
            {
                swal.fire('Digite solo letras en el campo del nombre','', 'error')
                form.nombre.focus();
                return(false);
            }

    else if(form.imagen.value.length==0){
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