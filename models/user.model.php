<?php
require_once("models/Connection.php");
class UserModel
{
    static public function getUser($email, $password)
    {
        $stmt = Connection::On()->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
}