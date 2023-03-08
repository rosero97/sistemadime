function validar_cerrar(form){

    var confirmar=confirm("Desea cerrar sesion [Aceptar] o [Cancelar]");
    if(confirmar==false)
    {
        return(false);
    }
        return(true);

}