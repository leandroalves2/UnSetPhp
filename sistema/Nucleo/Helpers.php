<?php 

namespace sistema\Nucleo;

class Helpers
{

    public static function validaCpf(string $cpf) : bool {

        $cpf = self::limparCpf($cpf);

        if(strlen($cpf) != 11) {
            return false;
        }
        else return true;
    }

    public static function limparCpf($cpf) {
        return $cpf = preg_replace('/\D/', '', $cpf);
    }

    public static function url() : string {
        return 'Teste funcion';
    }


}