<?php

    include "Usuario.php";
    include "dados/Usuario.php";

    use POO\Usuario as UsuarioRaiz;         //assim não dá problema importando classes c/ mesmo nome
    use POO\dados\Usuario as UsuarioDados;  //assim não dá problema importando classes c/ mesmo nome

    $obj = new UsuarioRaiz();
    var_dump($obj);
    echo "<br>";
    $obj2 = new UsuarioDados();
    var_dump($obj2);

?>