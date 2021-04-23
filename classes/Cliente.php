<?php
    class Cliente{

        // atributos
        private $codigo;
        private $nome;
        private $email;
        private $telefone;
        private $dataNascimento;
        private $senha;
        private $endereco;
        private $bairro;
        private $comoConheceu;
        private $promoPizza;
        private $promoParceiros;
        private $observacoes;

        public function __construct(){
                $this->promoParceiros = null;
                $this->promoPizza = null; 
                $this->observacoes = null;
            }
        public function validate(){
                $erros = array();
                if(empty($this->getNome()))
                    $erros[] = "É necessário informar um nome";
                if(empty($this->getNome()))
                    $erros[] = "É necessário informar a lista de ingredientes";
                if(empty($this->getEmail()))
                    $erros[] = "complete tudo";  
                if(empty($this->getTelefone()))
                    $erros[] = "complete tudo";   
                if(empty($this->getDataNascimento()))
                    $erros[] = "complete tudo";   
                if(empty($this->getSenha()))
                    $erros[] = "complete tudo";   
                if(empty($this->getEndereco()))
                    $erros[] = "complete tudo";   
                if(empty($this->getBairro()))
                    $erros[] = "complete tudo";   
                if(empty($this->getComoConheceu()))
                    $erros[] = "complete tudo";   
                return $erros;                                 
            }

            public function validateUp(){
                $erros = array();
                if(empty($this->getNome()))
                    $erros[] = "É necessário informar um nome";
                if(empty($this->getEmail()))
                    $erros[] = "complete tudo";  
                if(empty($this->getTelefone()))
                    $erros[] = "complete tudo";   
                if(empty($this->getDataNascimento()))
                    $erros[] = "complete tudo";   
                if(empty($this->getSenha()))
                    $erros[] = "complete tudo";   
                if(empty($this->getEndereco()))
                    $erros[] = "complete tudo";   
                if(empty($this->getBairro()))
                    $erros[] = "complete tudo";   

                return $erros;                                 
            }
        /**
         * Get the value of codigo
         */ 
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         *
         * @return  self
         */ 
        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 


        /**
         * Get the value of dataNascimento
         */ 
        public function getDataNascimento()
        {
                return $this->dataNascimento;
        }

        /**
         * Set the value of dataNascimento
         *
         * @return  self
         */ 
        public function setDataNascimento($dataNascimento)
        {
                $this->dataNascimento = $dataNascimento;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of observacoes
         */ 
        public function getObservacoes()
        {
                return $this->observacoes;
        }

        /**
         * Set the value of observacoes
         *
         * @return  self
         */ 
        public function setObservacoes($observacoes)
        {
                $this->observacoes = $observacoes;

                return $this;
        }

        /**
         * Get the value of promoParceiros
         */ 
        public function getPromoParceiros()
        {
                return $this->promoParceiros;
        }

        /**
         * Set the value of promoParceiros
         *
         * @return  self
         */ 
        public function setPromoParceiros($promoParceiros)
        {
                $this->promoParceiros = $promoParceiros;

                return $this;
        }

        /**
         * Get the value of promoPizza
         */ 
        public function getPromoPizza()
        {
                return $this->promoPizza;
        }

        /**
         * Set the value of promoPizza
         *
         * @return  self
         */ 
        public function setPromoPizza($promoPizza)
        {
                $this->promoPizza = $promoPizza;

                return $this;
        }

        /**
         * Get the value of comoConheceu
         */ 
        public function getComoConheceu()
        {
                return $this->comoConheceu;
        }

        /**
         * Set the value of comoConheceu
         *
         * @return  self
         */ 
        public function setComoConheceu($comoConheceu)
        {
                $this->comoConheceu = $comoConheceu;

                return $this;
        }

        /**
         * Get the value of endereco
         */ 
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of bairro
         */ 
        public function getBairro()
        {
                return $this->bairro;
        }

        /**
         * Set the value of bairro
         *
         * @return  self
         */ 
        public function setBairro($bairro)
        {
                $this->bairro = $bairro;

                return $this;
        }
    }
?>