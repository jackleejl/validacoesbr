<?php

namespace JackLee\ValidacoesBR;

/**
 * Validador de CPF.
 *
 * @author Jack Lee
 */
class Cpf
{

    /**
     * Valida o dado CPF.
     * 
     * @param string $cpf
     * @return boolean
     */
    public static function valida($cpf)
    {
        $cpf = preg_replace('/\D+/', '', trim($cpf));
        $cpfsInvalidos = array('00000000000', '11111111111', '22222222222', '33333333333', '44444444444',
            '55555555555', '66666666666', '77777777777', '88888888888', '99999999999');

        if (11 !== strlen($cpf) || in_array($cpf, $cpfsInvalidos)) {
            return false;
        }

        // Valida 1º dígito verificador
        $add = 0;

        // Multiplica os 9 primeiros dígitos pela sequência [10,9,8,7,6,5,4,3,2] e calcula a soma
        for ($i = 0; $i < 9; $i++) {
            $add += ((int) $cpf{$i}) * (10 - $i);
        }

        $rev = 11 - ($add % 11);

        // Caso o resto da divisão seja menor que 2, primeiro dígito verificador se torna zero
        if ($rev == 10 || $rev == 11) {
            $rev = 0;
        }

        if ($rev !== (int) $cpf{9}) {
            return false;
        }

        //Valida 2º dígito verificador
        $add = 0;

        // Multiplica os 10 primeiros dígitos pela sequência [11,10,9,8,7,6,5,4,3,2] e calcula a soma
        for ($i = 0; $i < 10; $i++) {
            $add += ((int) $cpf{$i}) * (11 - $i);
        }

        $rev = 11 - ($add % 11);

        // Caso o resto da divisão seja menor que 2, segundo dígito verificador se torna zero
        if ($rev == 10 || $rev == 11) {
            $rev = 0;
        }

        if ($rev !== (int) $cpf{10}) {
            return false;
        }

        return true;
    }

}
