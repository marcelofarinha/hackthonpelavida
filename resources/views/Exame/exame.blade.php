<?php

class Exame
{

    private $nome;
    private $titulo;
    private $action;
    private $campos = array();
    private $methodCancelar;
    private $classCancelar;
    private $iconeSubmit;
    private $textoSubmit;

    public function __construct(string $nome, string $titulo)
    {
        $this->nome = $nome;
        $this->titulo = $titulo;
    }

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    public function setActionCancelar(string $class, string $method)
    {
        $this->classCancelar = $class;
        $this->methodCancelar = $method;
    }

    public function adicionaCampo(iCampos $campo)
    {
        $this->campos[] = $campo;
    }

    public function alterarBotaoSubmit(string $rotulo, string $icone = ''): bool
    {
        $this->textoSubmit = $rotulo;
        if ($icone != '') {
            $this->iconeSubmit = $icone;
        }
        return true;
    }