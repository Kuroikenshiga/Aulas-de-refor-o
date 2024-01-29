<?php
    class Pessoa{

        private $nome;
        private $dataNascimento;

        public function __construct($nome, $dataNascimento)
        {
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
    }
    
?>