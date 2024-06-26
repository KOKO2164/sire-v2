<?php
if (!function_exists('formateadorMoneda')) {
    function formateadorMoneda($moneda) {
        //Comprueba si moneda no es string y lo convierte a string
        if (!is_string($moneda)) {
            $moneda = strval($moneda);
        }

        //Elimina las comas y convierte la cadena a un número
        $monedaNumber = floatval(str_replace(',', '', $moneda));

        //Comprueba si el valor proporcionado es un número válido y no es NaN
        if (!is_nan($monedaNumber) && is_numeric($monedaNumber)) {
            return number_format($monedaNumber, 2, '.', '');
        } else {
            // Maneja el caso en que moneda no es un número válido
            error_log('Valor de moneda inválido: ' . $moneda);
            return number_format(0, 2, '.', ''); // o manejarlo de acuerdo a tus necesidades
        }
    }
}