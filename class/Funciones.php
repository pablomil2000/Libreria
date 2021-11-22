<?php

    class Funcion{
        Public Static Function GET_texto($pagina, $get, $valor, $texto) {
            $cadena = '';
            $cadena = '<a href="'.$pagina.'?'.$get.'='.$valor.'">'.$texto.'</a>';
            return $cadena;
        } 

        Public Static Function GET_img($pagina,$get, $valor, $img, $tamaño) {
            $cadena = '';
            $cadena = '<a href="'.$pagina.'?'.$get.'='.$valor.'"><img src="'.$img.'" '.$tamaño.'></a>';
            return $cadena;
        }
    }