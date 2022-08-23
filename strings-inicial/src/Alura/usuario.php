<?php 
namespace App\Alura;

class usuario{
    private $nome ;
    private $sobrenome; 
    private $senha;
    private $tratamento;

    public function __construct(string $nome, string $senha, string $sexo){
        
        $this->setNomeSobrenome($nome);
        $this->validaSenha($senha);
        $this->adicionaTratamentoAoSobrenome($nome, $sexo);
    }
    
    private function adicionaTratamentoAoSobrenome(string $nome, $sexo): void{
        if($sexo === 'M'){
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Senhor', $nome, 1);
        }
        if($sexo === 'F'){
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Senhora', $nome, 1);
        }
    }

    public function getTratamento(): string{
        return $this->tratamento;
    }

    public function setNomeSobrenome(string $nome){
        
        $nomeSobrenome = explode(" ", $nome);
        if($nomeSobrenome[0] === ''){
            $this->nome = 'Nome Inválido';
        }
        else{
            $this->nome = $nomeSobrenome[0];
        }
        if($nomeSobrenome[1] === null || $nomeSobrenome[1] === ''){
            $this->sobrenome = 'Sobrenome Inválido';
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