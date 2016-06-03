<?php

namespace JackLee\ValidacoesBR;

/**
 * Validador de CEP.
 *
 * @author Jack Lee
 */
class Cep
{

    /**
     * Valida o dado CEP.
     * 
     * @param string $cep
     * @return boolean
     */
    public static function valida($cep)
    {
        $cep = preg_replace('/\D+/', '', trim($cep));

        if (preg_match('/^[0-9]{8}$/', $cep)) {
            return true;
        } else {
            return false;
        }
    }

}
