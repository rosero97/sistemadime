//validacion del registro administrador
function validar_administrador(form){

    if(form.nombres.value.length==0){
        swal.fire('Digite su nombre completo','','error')
        form.nombres.focus();
        return(false);
    }
        var letra="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890";
        var cadena=form.nombres.value;
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
                swal.fire('Digite solo letras en el campo','','error')
                form.nombres.focus();
                return(false);
            }
    
    else if(form.tipodoc.value.length==0){
        swal.fire('Seleccione su tipo de documento','','error')
        form.tipodoc.focus();
        return(false);
    }

    else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }

    else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }
else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }     
    var confirmar=confirm("Desea realizar la reservación [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion del registro usuario
function validar_usuario(form){

    if(form.nombres.value.length==0){
        swal.fire('Digite su nombre completo','','error')
        form.nombres.focus();
        return(false);
    }
        var letra="abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890";
        var cadena=form.nombres.value;
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
                swal.fire('Digite solo letras en el campo','','error')
                form.nombres.focus();
                return(false);
            }
    
    else if(form.tipodoc.value.length==0){
        swal.fire('Seleccione su tipo de documento','','error')
        form.tipodoc.focus();
        return(false);
    }

    else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }

    else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }
else if(form.numerodoc.value.length==0){
        swal.fire('Digite su numero de documento','','error')
        form.numerodoc.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerodoc.value;
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
                form.numerodoc.focus();
                return(false);
            }
 /*   
    else if(form.correo.value.length==0){
        swal.fire('Digite su dirección de correo electronico','','error')
        form.correo.focus();
        return(false);
    }
        var letra="";
        var cadena=form.correo.value;
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
                swal.fire('Digite un correo electronico valido','','error')
                form.correo.focus();
                return(false);
            }
    
    else if(form.numerocel.value.length==0){
        swal.fire('Digite su numero de celular','','error')
        form.numerocel.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.numerocel.value;
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
                form.numerocel.focus();
                return(false);
            }
    
    else if(form.contraseña.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.contraseña.focus();
        return(false);
    }
        var letra="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$";
        var cadena=form.contraseña.value;
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
                swal.fire('Digite una contraseña valida','La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. NO puede tener otros símbolos. Ejemplo: w3Unpocodet0d0','error')
                form.contraseña.focus();
                return(false);
            }
    
    else if(form.contraseña2.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.contraseña2.focus();
        return(false);
    }
        var letra="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$";
        var cadena=form.contraseña2.value;
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
                swal.fire('Digite una contraseña valida','La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. NO puede tener otros símbolos. Ejemplo: w3Unpocodet0d0','error')
                form.contraseña2.focus();
                return(false);
            } */    
    var confirmar=confirm("Desea realizar la reservación [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}