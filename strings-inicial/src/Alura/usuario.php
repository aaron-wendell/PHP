<?php 
namespace App\Alura;

class usuario{
    private $nome ;
    private $sobrenome; 

    public function __construct(string $nome, string $senha){
        
        $this->setNomeSobrenome($nome);
        $this->validaSenha($senha);

    }
    public function setNomeSobrenome(string $nome){
        
        $nomeSobrenome = explode(" ", $nome);
        if($nomeSobrenome[0] === ''){
            $this->nome = 'Nome Inválido';
        }
        else{
            $this->nome = $nomeSobrenome[0];
        }
        if($nomeSobrenome[1] === ''){
            $this->nome = 'Sobrenome Inválido';
        }
        else{
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getSobrenome(): string{
        return $this->sobrenome;
    }

    private function validaSenha(string $senha): void{
        $tamanhoSenha = strlen(trim($senha));
        if($tamanhoSenha > 6){
            $this->senha = $senha;
        }
        else{
            $this->senha = 'Senha invalida';
        }
    }
    public function getSenha(): string{
        return $this->senha;
    }
}

?>