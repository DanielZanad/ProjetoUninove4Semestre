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
            $stmt->bindValue(3, $usuario->getSenha());
            $stmt->bindValue(4, $usuario->getCel());
            $stmt->bindValue(5, $usuario->getDataNas());
            $stmt->bindValue(6, $usuario->getGenero());

            $stmt->execute();
            return json_encode(["status"=>"true", "sucesso"=>"Cadastro realizado com sucesso"]);
        }else{
            return json_encode(["status"=>"false","erro"=>"EMAIl ja existe no banco de dados"]);
        } 
   
    }

    public function read($id): array{
        return [];
    }
}

?>