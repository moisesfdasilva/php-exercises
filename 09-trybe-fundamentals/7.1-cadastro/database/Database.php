<?php

require_once "classes/Pessoa.php";
@session_start();

class Database {
    
    private static function &store() {
        if (!isset($_SESSION['pessoas'])) {
            $_SESSION['pessoas'] = [
                new Pessoa("John Dee", "123.456.789-90", "john@betrybe.com", "john", new DateTime("1980-10-21")),
            ];
        }
        return $_SESSION['pessoas'];
    }

    public static function listPessoas() {
        $pessoas =& self::store();
        return $pessoas;
    }

    public static function addPessoa(Pessoa $p) {
        $pessoas =& self::store();
        $pessoas[] = $p;
    }

    public static function findPessoa($e, $password) {
        $pessoas =& self::store();
        foreach ($pessoas as $pessoa) {
            if ($pessoa->email === $e && $pessoa->senha === $password) {
                return $pessoa;
            }
        }
        return null;
    }
}
