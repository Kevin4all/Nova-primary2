<?php

function crear_mensaje_usuario($titulo = '', $texto = '', $tipo = ''){
    $mensaje = array();
    $mensaje['titulo'] = $titulo;
    $mensaje['texto'] = $texto;
    $mensaje['tipo'] = $tipo;
    session()->set('mensaje', $mensaje);
}//end crear_mensaje_usuario

function imprimir_mensaje(){
    $mensaje = session()->mensaje;
    $html = '';
    if($mensaje != NULL){
        $html = "
        iziToast.".$mensaje['tipo']."({
            title: '".$mensaje['titulo']."',
            message: '".$mensaje['texto']."',
            position: 'topRight'
        });
        ";
    }//end if existe un mensaje
    session()->mensaje = array();
    return $html;
}//end imprimir_mensaje
