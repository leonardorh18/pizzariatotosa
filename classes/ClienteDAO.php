<?php
    require_once "Conexao.php";
    require_once "Cliente.php";

    class ClienteDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $query = $this->conexao->prepare("select * from cliente order by nome");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function buscar($cod){
            try{
                $query = $this->conexao->prepare("select * from cliente where codigo=:cod");
                $query->bindParam(":cod", $cod);
                $query->execute();
                $registro = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }        
       
        public function inserir(cliente $cliente){
            try{
                $query = $this->conexao->prepare("insert into cliente (nome, email, telefone, dataNascimento, senha, endereco, bairro, comoConheceu
                , promoPizza, promoParceiros, observacoes) values (:n, :e, :t, :dn, :s, :end, :b, :cc, :pp, :ppr, :obs)");
                $query->bindValue(":n", $cliente->getNome());
                $query->bindValue(":e", $cliente->getEmail());
                $query->bindValue(":t", $cliente->getTelefone());
                $query->bindValue(":dn", $cliente->getDataNascimento());
                $query->bindValue(":s", $cliente->getSenha());
                $query->bindValue(":end", $cliente->getEndereco());
                $query->bindValue(":b", $cliente->getBairro());
                $query->bindValue(":cc", $cliente->getComoConheceu());
                $query->bindValue(":pp", $cliente->getPromoPizza());
                $query->bindValue(":ppr", $cliente->getPromoParceiros());
                $query->bindValue(":obs", $cliente->getObservacoes());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function alterar(cliente $cliente){
            try{
                $query = $this->conexao->prepare("update cliente set nome = :n, 
                    email = :e, telefone = :t, dataNascimento = :dt, senha = :s, endereco = :end, bairro = :b, observacoes = :obs where codigo = :cod");
                $query->bindValue(":n", $cliente->getNome());
                $query->bindValue(":e", $cliente->getEmail());
                $query->bindValue(":t", $cliente->getTelefone());
                $query->bindValue(":dt", $cliente->getDataNascimento());
                $query->bindValue(":s", $cliente->getSenha());
                $query->bindValue(":end", $cliente->getEndereco());
                $query->bindValue(":b", $cliente->getBairro());
                $query->bindValue(":obs", $cliente->getObservacoes());

                $query->bindValue(":cod", $cliente->getCodigo());
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

        public function excluir($cod){
            try{
                $query = $this->conexao->prepare("delete from cliente where codigo = :cod");
                $query->bindValue(":cod", $cod);
                return $query->execute();
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados: ". $e->getMessage();
            }
        }

    }

?>   