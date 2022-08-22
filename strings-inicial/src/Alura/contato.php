<?php
namespace App\Alura;

class contato{
    private $email, $endereco, $cep;

    public function __construct(string $email, $endereco, $cep)
    {
        if($this->validaEmail($email) !== false){
            $this->setEmail($email);
        }
        else{
            $this->setEmail('Email inválido');
        }
        $this->endereco = $endereco;
        $this->cep = $cep;
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
}