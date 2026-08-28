<?php

function monta_saudacao(string $saudacao, string $nome, string $sobrenome = '', string $tratamento = '')
{
    $frase = '';
    $frase .= $saudacao;

    if ($tratamento)
    {
        $frase .= '' . $tratamento;
    }

    $frase .= ' ' . $nome;
    
    if ($sobrenome)
    {
        $frase .= ' ' . $sobrenome;
    }

    return $frase;
}

print monta_saudacao(saudacao: 'Seja bem-vindo', nome: 'Lucio', tratamento: 'Desenvolvedor PHP');