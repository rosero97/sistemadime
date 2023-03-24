
//validacion de agregar mesa
function validar_agregar_mesa(form){

    if(form.mesa.value.length==0){
        swal.fire('Digite el numero de mesa','', 'error');
        form.mesa.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.mesa.value;
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
                swal.fire('Digite solo numeros en el campo','', 'error')
                form.mesa.focus();
                return(false);
            }
    
    if(form.personas.value.length==0){
        swal.fire('Digite el numero maximo de pesonas','', 'error');
        form.personas.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.personas.value;
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
                swal.fire('Digite solo numeros en el campo','', 'error')
                form.personas.focus();
                return(false);
            }
    
    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion de modificar numero de mesa
function validar_modificar_mesa_personas(form){
    if(form.personas.value.length==0){
        swal.fire('Digite el numero maximo de pesonas','', 'error');
        form.personas.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.personas.value;
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
                swal.fire('Digite solo numeros en el campo','', 'error')
                form.personas.focus();
                return(false);
            }

    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);
}

//validacion de modificar numero de personas
function validar_modificar_mesa_numero(form){

    if(form.mesa.value.length==0){
        swal.fire('Digite el nuevo numero de mesa','', 'error');
        form.mesa.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.mesa.value;
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
                swal.fire('Digite solo numeros en el campo','', 'error')
                form.mesa.focus();
                return(false);
            }  
        
    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);
    

}

//validacion eliminar mesa
function validar_eliminar_mesa(form){

    var confirmar=confirm("Desea realizar los cambios [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}