
//validacion de agregar mesa
function validar_agregar_mesa(form){

    if(form.mesa.value.length==0){
        alert("Digite el numero de mesa");
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
                alert("Digite solo numeros en el campo");
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

//validacion de modificar mesa
function validar_modificar_mesa(form){

    if(form.mesa.value.length==0){
        alert("Digite el nuevo numero de mesa");
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
                alert("Digite solo numeros en el campo");
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