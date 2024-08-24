<?php

class Contador {

    public static $contador = 0;

    public static function incremento()
    {
        self::$contador++;
    }

    public static function decremento()
    {
        self::$contador--;
    }

    /*
    public static function exibirContagem()
    {
        return self::$contador;
    }
    */
    
}

?>