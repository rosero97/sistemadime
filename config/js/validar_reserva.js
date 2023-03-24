//validacion de la reservacion
function validar_reserva(form){

    if(form.mesa.value.length==0){
        swal.fire('Seleccione una mesa','','error')
        form.mesa.focus();
        return(false);
    }
    else if(form.personas.value.length==0){
        swal.fire('Digite el numero de personas','','error')
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
                swal.fire('Digite solo numeros en el campo','','error')
                form.personas.focus();
                return(false);
            }

    else if(form.fecha.value.length==0){
        swal.fire('Seleccione la fecha y hora de las reservación','','error')
        form.fecha.focus();
        return(false);
    }
    else if(form.observaciones.value.length==0){
        swal.fire('Escriba si tiene observaciones de lo contario escriba ninguna','','error')
        form.observaciones.focus();
        return(false);
    }
                    
    var confirmar=confirm("Desea realizar la reservación [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion de la modificacion de la reservacion
function validar_modificar_reserva(form){

    if(form.fecha.value.length==0){
        swal.fire('Seleccione la fecha y hora de las reservación','','error')
        form.fecha.focus();
        return(false);
    }
    else if(form.observaciones.value.length==0){
        swal.fire('Escriba si tiene observaciones de lo contario escriba ninguna','','error')
        form.observaciones.focus();
        return(false);
    }
                    
    var confirmar=confirm("Desea realizar la reservación [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}