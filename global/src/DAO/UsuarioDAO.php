<?php

class UsuarioDAO
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function listarUsuario($profile)
    {
        $sql = 'SELECT * FROM profile';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function inserirUsuario($profile)
    {
        $sql = "INSERT INTO usuarios(id,name,last_name,email,profession,phone,address,city,state,country,neighborhood,zip,senha_crypt
        VALUE(:id,:name,:last_name,:email,:profession,:phone,:address,:city,:state,:country,:neighborhood,:zip,:senha_crypt)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $profile['id']);
        $stmt->bindParam(':name', $profile['name']);
        $stmt->bindParam(':last_name', $profile['last_name']);
        $stmt->bindParam(':email', $profile['email']);
        $stmt->bindParam(':senha_crypt', $profile['senha_crypt']);
        if ($stmt->execute()) {
            return "200 OK";
        }
    }
    public function atualizarUsuario($profile)
    {
        $sql = "UPDATE profile SET id = :id name = :name, last_name = :last_name, profession = :profession, phone = :phone, city= :city , state= :state, country= :country neighborhood = :neighborhood
        senha_crypt = :senha_crypy)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $profile['id']);
        $stmt->bindParam(':name', $profile['name']);
        $stmt->bindParam(':last_name', $profile['last_name']);
        $stmt->bindParam(':email', $profile['email']);
        $stmt->bindParam(':senha_crypt', $profile['senha_crypt']);
    }

    public function deletarUsuario($id)
    {
        $sql = "DELETE * FROM profile id =id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
    }
}
