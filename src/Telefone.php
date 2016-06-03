<?php

namespace JackLee\ValidacoesBR;

/**
 * Validador de telefone.
 *
 * @author Jack Lee
 */
class Telefone
{

    /**
     * Valida o dado telefone.
     * 
     * @param string $telefone
     * @return boolean
     */
    public static function valida($telefone)
    {
        $telefone = preg_replace('/\D+/', '', trim($telefone));
        $numeroDigitos = strlen($telefone);

        if ($numeroDigitos < 10 || $numeroDigitos > 11) {
            return false;
        }

        if (preg_match('/^[1-9]{2}([0-9]{8}|9[0-9]{8})$/', $telefone)) {
            return true;
        } else {
            return false;
        }
    }

}
