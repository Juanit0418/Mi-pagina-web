<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
};

function s($valor) {
    if ($valor === null) {
        return null;
    }

    if (is_int($valor) || is_float($valor) || ctype_digit($valor)) {
        return $valor;
    }

    if (is_bool($valor)) {
        return $valor;
    }

    if (is_string($valor)) {
        $valor = trim($valor);
    }

    return htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}