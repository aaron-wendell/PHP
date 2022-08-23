<?php
namespace App\Alura;

class contato{
    private $email, $endereco, $cep, $telefone;

    public function __construct(string $email, $endereco, $cep, $telefone)
    {
        if($this->validaEmail($email) !== false){
            $this->setEmail($email);
        }
        else{
            $this->setEmail('Email inválido');
        }
        $this->endereco = $endereco;
        $this->cep = $cep;
        if($this->validaTelefone($telefone)){
            $this->setTelefone($telefone);
        }    
        else{
            $this->telefone = 'Telefone invalido';
        }
    }

    public function setEmail(string $email): void{
        $this->email = $email;
    }

    public function getUsuario(): string{
        $posicaoArroba = strpos($this->email, "@");

        if($posicaoArroba == false){
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }
    private function validaEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getEnderecoCep(): string{
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }
    public function getTelefone(): string{
        return $this->telefone;
    }
    private function validaTelefone(string $telefone): int{
        //usando uma expressao regular
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    // preg_match -> primeiro parametro = expressao regular, segundo onde a procurar, ultimo recebe os valores encontrados        
    }
    private function setTelefone(string $telefone): void{
        $this->telefone = $telefone;
    }
}