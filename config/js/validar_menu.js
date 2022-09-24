//validacion de agregar menu
function validar_agregar_menu(form){

    if(form.nombre.value.length==0){
        alert("Digite el nombre del plato");
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
                alert("Digite solo letras en el campo del nombre");
                form.nombre.focus();
                return(false);
            }

    else if(form.imagen.value.length==0){
        alert("Inserte una imagen en el campo");
        form.imagen.focus();
        return(false);
    }

    else if(form.descripcion.value.length==0){
        alert("Digite la descripcion del plato");
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
        alert("Modifique el nombre del plato");
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
                alert("Digite solo letras en el campo del nombre");
                form.nombre.focus();
                return(false);
            }

    else if(form.imagen.value.length==0){
        alert("Inserte una imagen en el campo");
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