<?php
//Helper sencillo para convertir a mayusculas
if (!function_exists('convertirMayusculas')) {
    function convertirMayusculas(string $texto): string
    {
        return strtoupper($texto);
    }
}
