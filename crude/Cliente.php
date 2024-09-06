<?php
    class Cliente {

        private $conexao;
        // private $db;
        private $id;
        private $nome;
        private $cpf;
        private $telefone;
        private $email;

        public function __construct($db){
            $this->conexao = $db;
        }

        public function create(){
            try {
                $stmt = $this->conexao->query("SELECT DATABASE()");
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                echo "Banco de dados selecionado: " . json_encode($result);
            } catch (PDOException $e) {
                echo "Erro na consulta: " . $e->getMessage();
            }
            
            $query = "INSERT INTO cliente SET nome=:nome, telefone=:telefone, email=:email, cpf=:cpf";
            echo $query;
            $stmt = $this->conexao->prepare($query);
    
            $stmt->bindParam(":nome", $this->nome);
            $stmt->bindParam(":telefone", $this->telefone);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":cpf", $this->cpf);
    
            if($stmt->execute()) {
                return true;
            }
            
            else{
                return false;
            }
        }

        public function read(){
            $query = "SELECT * FROM cliente";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        public function consultar(){
            $query = "SELECT * FROM cliente where id = :id";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindParam(":id", $this->id);
            $stmt->execute();

            return $stmt;
        }
    
        public function delete(){
            $query = "DELETE FROM cliente WHERE id = :id";
            $stmt = $this->conexao->prepare($query);

            $stmt->bindParam(":id", $this->id);

            if($stmt->execute()){
                return true;
            }

            return false;
        }

        public function update(){
            $query = "UPDATE cliente set nome=:nome, telefone=:telefone, email=:email, cpf=:cpf where id = :id";
            $stmt  = $this->conexao->prepare($query);

            $stmt->bindParam(":nome", $this->nome);
            $stmt->bindParam(":telefone", $this->telefone);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":cpf", $this->cpf);
            $stmt->bindParam(":id", $this->id);

            if ($stmt->execute()) {
                return true;
            }else{
                return false;
            }
        }

        // Getter e Setter para $nome
        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        // Getter e Setter para $cpf
        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        // Getter e Setter para $telefone
        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        // Getter e Setter para $email
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;

        }
    }

?>