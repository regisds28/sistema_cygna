<?php
    // abrir conexão
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "842912ap";
    $banco    = "cygna";
    $conecta  = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    // testar conexão
    if(mysqli_connect_errno()){
        die("Erro de conexão: " . mysqli_connect_errno());
}