<?php

namespace Alura;

use Alura\Exceptions\ErroEntradaNomeException;
use Exception;

class Usuario
{   
    private $nome;
    private $sobrenome;
    public function __construct(string $nome)
    {   
  
        $nomeSobrenome = explode(" ", $nome, 2);
        try{
            if($nomeSobrenome[0] === "" || $nomeSobrenome[1] === null){
                throw new ErroEntradaNomeException(); 
            }else{
                $this->nome = $nomeSobrenome[0];
                $this->sobrenome = $nomeSobrenome[1];
            }
        }catch(ErroEntradaNomeException $e){
            echo $e->getMessage();
        }

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
}
?>