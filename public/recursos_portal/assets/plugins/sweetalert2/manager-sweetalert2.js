/* Función para realizar alertas en versión sweetalert, esta funcion recibe 3 parámetros
    título: Será el título principal del modal
    mensaje: Será el cuerpo que desplegará el modal
    tipo: 1 = success 2 = error, 3 = warning
*/
const alerta_modal = (titulo = '', mensaje = '', tipo = 1) => {
    Swal.fire(
        titulo,
        mensaje,
        tipo_alerta_modal(tipo)
    );
}; //end function alerta_modal

/* función para saber que tipo de alerta es*/
const tipo_alerta_modal = (num) => {
    tipo = '';
    switch (num) {
        case 1:
            tipo = 'success';
            break;
        case 2:
            tipo = 'error';
            break;
        case 3:
            tipo = 'warning';
            break;

        default:
            tipo = 'success';
            break;
    }//end switch
    return tipo;
}; //end function tipo_alerta_modal

//============================================
//FUNCIÓN PARA COLOCAR EL TIPO DEL ESTATUS
//============================================
/**
* Esta función es parte de cambiar estatus y el retorno es un string revolviendo el tipo de estatus
* que al que se esta cambiando. Como parametro recibe un string con valor "1" o "-1".
*/
const tipo_estatus = (estatus) => {
    if(estatus === "2") {
        return 'deshabilitar';
    }//end if
    else {
        return 'habilitar';
    }//end else
};//end tipo_estatus


//============================================
//FUNCIÓN PARA OBTENER EL ESTATUS
//============================================
/**
* Esta función es parte de cambiar estatus y el retorno es un string revolviendo el tipo de estatus
* que al que se esta cambiando. Como parametro recibe un string con valor "1" o "-1".
*/
const obtener_estatus = (estatus) => {
    if(estatus === "2") {
        return -1;
    }//end if
    else {
        return 2;
    }//end else
};//end tipo_estatus


//============================================
//FUNCIÓN PARA CAMBIAR ESTATUS
//============================================
/*
* Función global para cambiar el estatus de algún registro.
* Esta función funciona para cambiar un estatus de algún registro
* que maneje dos estatus solamente y se hace por consulta ajax.
* Esta función recibe dos argumentos, el primero es un arreglo que
* contiene 6 indices y el segundo es un objeto DataTable
* [0] -> URL
* [1] -> ID
* [2] -> ESTATUS
* [3] -> COMPLEMENTO DE PREGUNTA EJEMP. ¿Estás seguro de habilitar "este registro/este campo/este usuario"?
* Lo que va entre comillas es el complemento de la pregunta.
* [4] -> TEXTO EJEMP. Al habilitar/deshabilitar "se mostrara en las listas/tendrá permiso para acceder al sistema"
* El texto sería lo que va entre las comillas
* [5] -> Objeto dataTable. El objeto datatable funciona para actualizar el contenido de la misma dataTable
*/
const cambiar_estatus = (array, url=null) => {
    Swal.fire({
        title: "¿Estás seguro de " + tipo_estatus(array[2]) + " " + array[3] + "?",
        text: "Al "+tipo_estatus(array[2])+" "+array[3]+" "+(array[2] === "2" ? 'no ' :'')+array[4],
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#7bb13c',
        cancelButtonColor: '#e84646',
        confirmButtonText: 'Sí, ' + tipo_estatus(array[2]),
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    })
    .then((result) => {
        if(result.isConfirmed) {
            $.ajax({
                url: array[0],
                method: 'POST',
                data: { id: array[1],
                  estatus: obtener_estatus(array[2])
                },
                success: function (data) {
                    alerta_modal('¡Estatus Actualizado!', '¡El estatus ha sido actualizado exitosamente!', 1);
                    window.location = url;
                },//End success
                error: function (data) {
                    alerta_modal('¡Error!', 'Ocurrió un error al actualizar el estatus', 2);
                }//End error
            });
        }//end if se actualiza estatus
    });
};//end cambiar_estatus

const cambiar_estatus_datatable = (array, table) => {
    Swal.fire({
        title: "¿Estás seguro de " + tipo_estatus(array[2]) + " " + array[3] + "?",
        text: "Al "+tipo_estatus(array[2])+" "+array[3]+" "+(array[2] === "2" ? 'no ' :'')+array[4],
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#7bb13c',
        cancelButtonColor: '#e84646',
        confirmButtonText: 'Sí, ' + tipo_estatus(array[2]),
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    })
    .then((result) => {
        if(result.isConfirmed) {
            $.ajax({
                url: array[0],
                method: 'POST',
                data: { id: array[1],
                  estatus: obtener_estatus(array[2])
                },
                success: function (data) {
                    alerta_modal('¡Estatus Actualizado!', '¡El estatus ha sido actualizado exitosamente!', 1);
                    table.ajax.reload(null, false);
                },//End success
                error: function (data) {
                    alerta_modal('¡Error!', 'Ocurrió un error al actualizar el estatus', 2);
                }//End error
            });
        }//end if se actualiza estatus
    });
};//end cambiar_estatus_datatable


//============================================
//FUNCIÓN PARA ELIMINAR
//============================================
/*
* Esta función elimina cualquier registro de manera global, esta función recibe los parámetros:
    ruta: la ruta en donde se encuentra la función para eliminar el registro
    id: id del registro a borrar
    titulo: título del modal
    mensaje: mensaje del modal
    url: url de a donde dirigir una vez finalizada la operación
*/
const eliminar = (ruta = "", id=0, titulo='', mensaje='', url) => {
    Swal.fire({
        title: titulo,
        text: mensaje,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#7bb13c',
        cancelButtonColor: '#e84646',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    })
    .then((result) => {
        if(result.isConfirmed) {
            $.ajax({
                url: ruta,
                method: 'POST',
                data: { id: id },
                success: function (data) {
                    alerta_modal('¡Registro Eliminado!', '¡El registro ha sido eliminado exitosamente!', 1);
                    window.location = url;
                },//End success
                error: function (data) {
                    alerta_modal('¡Error!', 'Ocurrió un error al eliminar el registro', 2);
                }//End error
            });
        }//end if sí elimina
    });
}; //end eliminar

const eliminar_datatable = (ruta = "", id=0, titulo='', mensaje='', table) => {
    Swal.fire({
        title: titulo,
        text: mensaje,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#7bb13c',
        cancelButtonColor: '#e84646',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
    })
    .then((result) => {
        if(result.isConfirmed) {
            $.ajax({
                url: ruta,
                method: 'POST',
                data: { id: id },
                success: function (data) {
                    alerta_modal('¡Registro Eliminado!', '¡El registro ha sido eliminado exitosamente!', 1);
                    table.ajax.reload(null, false);
                },//End success
                error: function (data) {
                    alerta_modal('¡Error!', 'Ocurrió un error al eliminar el registro', 2);
                }//End error
            });
        }//end if sí elimina
    });
}; //end eliminar_datatable
