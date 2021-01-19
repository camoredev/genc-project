<?php

include("config.php");

class UsuarioDao{

    public function cadastrarUsuarioLogin(){
        
        Usuario $usuario = new Usuario();

        // Como " não irá " ter o Controller, vou pegar as informações do formulário já aqui
        $nomeuser = filter_input(INPUT_POST, "nomeuser", FILTER_SANITIZE_STRING);
        $emailuser = filter_input(INPUT_POST, "emailuser", FILTER_SANITIZE_STRING);
        $senhauser = filter_input(INPUT_POST, "senhauser", FILTER_SANITIZE_STRING);

        // Setando no atributo o que vai ser vindo do formulário
        $nomeUsuario = $usuario->getNome();
        $emailUsuario = $usuario->getEmail();
        $senhaUsuario = $usuario->getSenha();

        // Aqui irá instanciar uma nova conexão - Separar a conexão e não esquecer de puxar o método que está as funcionalidades
        $con = new Conexao();
        
        // Código sql - abaixo está um exemplo de como iria ficar, não esquece do MD5
        $sql = "insert into usario (id,nome,email,senha) values(default,:nomeuser,:emailuser, :senhauser)";
        

        try{
            $stm = $con->conectar()->prepare($sql);
            $stm->bindParam(":nomeuser", $nomeUsuario);
            $stm->bindParam(":emailuser", $emailUsuario);
            $stm->bindParam(":senhauser", $senhaUsuario);

            if($stm->execute()){
                echo "<script>alert('Usuario cadastrado com sucesso!');window.history.back();</script>";
            }
        } catch (PDOException $ex) {
                echo "Erro:  ".$ex->getMessage();
        }
    }
}