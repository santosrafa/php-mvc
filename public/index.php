<?php

switch ($_SERVER['PATH_INFO']){                                 /* $_SERVER['PATH_INFO']: Atraves dela podemos obter a Url */
    case '/listar-cursos':
        require 'listar-cursos.php';
        break;
    case '/novo-curso':
        require 'formulario-novo-curso.php';
        break;
    default:
        echo "Erro 404";
        break;
}