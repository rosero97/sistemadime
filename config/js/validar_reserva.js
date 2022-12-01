//validacion de la reservacion
function validar_reserva(form){

    if(form.mesa.value.length==0){
        alert("Seleccione una mesa");
        form.mesa.focus();
        return(false);
    }
    else if(form.personas.value.length==0){
        alert("Digite el numero de personas");
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
                alert("Digite solo numeros en el campo");
                form.personas.focus();
                return(false);
            }

    else if(form.fecha.value.length==0){
        alert("Seleccione la fecha y hora de las reservación");
        form.fecha.focus();
        return(false);
    }
    else if(form.observaciones.value.length==0){
        alert("Escriba si tiene observaciones de lo contario escriba ninguna");
        form.observaciones.focus();
        return(false);
    }
        var letra="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890";
        var cadena=form.observaciones.value;
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
                    
    var confirmar=confirm("Desea realizar la reservación [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
