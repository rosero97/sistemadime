//validacion del registro administrador
function validar_administrador(form){

    if(form.nombres.value.length==0){
        swal.fire('Digite su nombre completo','','error')
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
    
    else if(form.correo.value.length==0){
        swal.fire('Digite su correo electronico','','error')
        form.correo.focus();
        return(false);
    }        

    else if(form.numerocel.value.length==0){
        swal.fire('Digite su numero de contacto','','error')
        form.numerocel.focus();
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
    
    else if(form.contraseña.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.contraseña.focus();
        return(false);
    }

    else if(form.contraseña2.value.length==0){
        swal.fire('Digite nuevamente su contraseña','','error')
        form.contraseña2.focus();
        return(false);
    }

}

//validacion del registro usuario
function validar_usuario(form){

    if(form.nombres.value.length==0){
        swal.fire('Digite su nombre completo','','error')
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
    
    else if(form.correo.value.length==0){
        swal.fire('Digite su correo electronico','','error')
        form.correo.focus();
        return(false);
    }        

    else if(form.numerocel.value.length==0){
        swal.fire('Digite su numero de contacto','','error')
        form.numerocel.focus();
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
    
    else if(form.contraseña.value.length==0){
        swal.fire('Digite su contraseña','','error')
        form.contraseña.focus();
        return(false);
    }

    else if(form.contraseña2.value.length==0){
        swal.fire('Digite nuevamente su contraseña','','error')
        form.contraseña2.focus();
        return(false);
    }

}

//validacion del nombre del usuario
function validar_nombre_usuario(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite su nombre completo','','error')
        form.nombre.focus();
        return(false);
    }

    var confirmar=confirm("Desea realizar el cambio del nombre [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del correo del usuario
function validar_correo_usuario(form){

    if(form.correo.value.length==0){
        swal.fire('Digite su correo electronico','','error')
        form.correo.focus();
        return(false);
    }

    var confirmar=confirm("Desea realizar el cambio del nombre [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del celular del usuario
function validar_celular_usuario(form){

    if(form.celular.value.length==0){
        swal.fire('Digite su numero de contacto','','error')
        form.celular.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.celular.value;
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
                form.celular.focus();
                return(false);
            }
    
    var confirmar=confirm("Desea cambiar su numero de contacto [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion de la contraseña del usuario
function validar_contra_usuario(form){

     if(form.contrasena.value.length==0){
        swal.fire('Digite su contraseña actual','','error')
        form.contrasena.focus();
        return(false);
    }
    else if(form.contrasena1.value.length==0){
        swal.fire('Digite su nueva contraseña','','error')
        form.contrasena1.focus();
        return(false);
    }
    else if(form.contrasena2.value.length==0){
        swal.fire('Digite nuevamente su contraseña','','error')
        form.contrasena2.focus();
        return(false);
    }

    var confirmar=confirm("Desea cambiar su contraseña [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del nombre del administrador
function validar_nombre_admin(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite su nombre completo','','error')
        form.nombre.focus();
        return(false);
    }

    var confirmar=confirm("Desea realizar el cambio del nombre [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del correo del admin
function validar_correo_admin(form){

    if(form.correo.value.length==0){
        swal.fire('Digite su correo electronico','','error')
        form.correo.focus();
        return(false);
    }

    var confirmar=confirm("Desea realizar el cambio del nombre [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del celular del administrador
function validar_celular_admin(form){

    if(form.celular.value.length==0){
        swal.fire('Digite su numero de contacto','','error')
        form.celular.focus();
        return(false);
    }
        var letra="1234567890";
        var cadena=form.celular.value;
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
                form.celular.focus();
                return(false);
            }
    
    var confirmar=confirm("Desea cambiar su numero de contacto [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion de la contraseña del administrador
function validar_contra_admin(form){

    if(form.contrasena.value.length==0){
        swal.fire('Digite su contraseña actual','','error')
        form.contrasena.focus();
        return(false);
    }
    else if(form.contrasena1.value.length==0){
        swal.fire('Digite su nueva contraseña','','error')
        form.contrasena1.focus();
        return(false);
    }
    else if(form.contrasena2.value.length==0){
        swal.fire('Digite nuevamente su contraseña','','error')
        form.contrasena2.focus();
        return(false);
    }

    var confirmar=confirm("Desea cambiar su contraseña [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}

//validacion de agregar restaurante
function validar_agregar_company(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite el nombre del restaurante','','error')
        form.nombre.focus();
        return(false);
    }
    else if(form.imagen.value.length==0){
        swal.fire('Inserte una imagen o slogan del restaurante','','error')
        form.imagen.focus();
        return(false);
    }
    else if(form.direccion.value.length==0){
        swal.fire('Digite la dirección del restaurante','','error')
        form.direccion.focus();
        return(false);
    }
    else if(form.telefono.value.length==0){
        swal.fire('Digite el numero de contacto del restaurante','','error')
        form.telefono.focus();
        return(false);
    }
    else if(form.correo.value.length==0){
        swal.fire('Digite el correo del restaurante','','error')
        form.correo.focus();
        return(false);
    }
    else if(form.hora.value.length==0){
        swal.fire('Digite el horario de atencion del restaurante','','error')
        form.hora.focus();
        return(false);
    }

    var confirmar=confirm("Desea registrar su restaurante con esos datos [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}
//validacion del modificar restaurante
function validar_modificar_company(form){

    if(form.nombre.value.length==0){
        swal.fire('Digite el nombre del restaurante','','error')
        form.nombre.focus();
        return(false);
    }
    else if(form.direccion.value.length==0){
        swal.fire('Digite la dirección del restaurante','','error')
        form.direccion.focus();
        return(false);
    }
    else if(form.telefono.value.length==0){
        swal.fire('Digite el numero de contacto del restaurante','','error')
        form.telefono.focus();
        return(false);
    }
    else if(form.correo.value.length==0){
        swal.fire('Digite el correo del restaurante','','error')
        form.correo.focus();
        return(false);
    }
    else if(form.hora.value.length==0){
        swal.fire('Digite el horario de atencion del restaurante','','error')
        form.hora.focus();
        return(false);
    }
    else if(form.imagen.value.length==0){
        swal.fire('Inserte una imagen o slogan del restaurante','','error')
        form.imagen.focus();
        return(false);
    }

    var confirmar=confirm("Desea guardar los cambios del restaurante [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}