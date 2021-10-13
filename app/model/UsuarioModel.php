<?php

namespace app\model;

class UsuarioModel{
    public function create(Usuario $usuario){

        $sql = 'SELECT * FROM usuario WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $usuario->getEmail()); 
        $stmt->execute();
        if(!($stmt->rowCount()>0)){
            // Criando query para INSERIR no banco de dados
            $sql = 'INSERT INTO usuario (nome, email,
            senha, cel, dataNas, genero) VALUES (?,?,?,?,?,?)';

            // Preparar query
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getEmail());
            $stmt->bindValue(3, $usuario->getSenha());
            $stmt->bindValue(4, $usuario->getCel());
            $stmt->bindValue(5, $usuario->getDataNas());
            $stmt->bindValue(6, $usuario->getGenero());

            $stmt->execute();
        }else{
            return json_encode(["status"=>"false","erro"=>"EMAIl ja existe no banco de dados"]);
        } 
   
    }

    public function read($id): array{
        return [];
    }
}

?>