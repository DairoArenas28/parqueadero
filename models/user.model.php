<?php
require_once(__DIR__ . "/../models/Connection.php");
class UserModel
{
    static public function getUser($email)
    {
        $stmt = Connection::On()->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    } 

    static public function getUserAllMdl(){
        $stmt = Connection::On()->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getUserColMdl($column,$value){
        try {
            $stmt = Connection::On()->prepare("SELECT * FROM user WHERE $column = :value");
            $stmt->bindParam(":value",$value,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en la consulta: " . $e->getMessage());
            return null;
        }
    }

    static public function putUserMdl($data){
        $stmt = Connection::On()->prepare("INSERT INTO user(username,email,password) VALUES (:username, :email, :password)");
        $stmt->bindParam(":username",$data['username'], PDO::PARAM_STR);
        $stmt->bindParam(":email",$data['email'], PDO::PARAM_STR);
        $stmt->bindParam(":password",$data['password'], PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
    }

    static public function updateUserMdl($data){
        $stmt = Connection::On()->prepare('UPDATE user SET username = :username, email = :email, password = :password WHERE id = :id');
        $stmt->bindParam(':username',$data['username'], PDO::PARAM_STR);
        $stmt->bindParam(':email',$data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password',$data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':id',$data['id'], PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }

    static public function deleteUserMdl(){

    }
}