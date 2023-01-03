<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo = 'Novo Curso';
        require __DIR__ . '/../../view/cursos/formulario.php';                  /* Quando se da um require as variaveis deste arquivo estarao acessiveis no listar-cursos.php. */
    }
}