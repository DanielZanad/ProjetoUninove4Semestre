<?php

namespace app\model;

class UsuarioModel{
    public function create(Usuario $usuario){
        $ok = true;
        $sql = 'SELECT email FROM usuario';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach($result as $r){
            if ($r["email"] == $usuario->getEmail()){
                $ok = false;
            }else{
                $ok = true;
            }
        }
        if($ok){
            $sql = 'INSERT INTO usuario (nome, email,
            senha, cel, dataNas, genero) VALUES (?,?,?,?,?,?)';

            // Preparar query
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getEmail());
            $stmt->bindValue(3, md5($usuario->getSenha()));
            $stmt->bindValue(4, $usuario->getCel());
            $stmt->bindValue(5, $usuario->getDataNas());
            $stmt->bindValue(6, $usuario->getGenero());

            $stmt->execute();
            return ["status"=>200, "msg"=>"Cadastro realizado com sucesso"];
        }else{
            return ["status"=>400, "msg"=>"EMAIl ja existe no banco de dados"];
        }
   
    }

    public function searchEmail($email){
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return ["status"=>200,"msg"=>"email encontrado com sucesso", "conteudo"=>$result];
        }else{// Se nao encontrar nenhum dado no banco
            return ["status"=>400,"msg"=>"Usuario inexistente"];
        }
        
    }

    public function read(){
        $sql = 'SELECT * FROM usuario';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            // Criando um array com todos os registros
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }else{// Se nao encontrar nenhum dado no banco
            return [];
        }
    }


    public function login($email,$senha){
        $senha = md5($senha);
        $sql = "SELECT email FROM usuario WHERE email = '$email' and senha = '$senha'";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            return ["status"=>200, "msg"=>"Logado com sucesso"];
        }else{// Se nao encontrar nenhum dado no banco
            return ["status"=>400, "msg"=>"Senha Incorreta"];
        }
    }

}

?>