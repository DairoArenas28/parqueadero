<?php
require_once(__DIR__ . "/../controllers/user.controller.php");

class UserAjax {
    public $idUser;
    
    public function ajaxEditUser() {
        $value = $this->idUser;

        // Llamar al controlador para obtener el usuario
        $result = UserController::getUserColCtr("id", $value);

        // Enviar respuesta en formato JSON
        echo json_encode($result);
    }
}

// Verificar si la solicitud contiene el idUser
if (isset($_POST["idUser"])) {
    $editUser = new UserAjax();
    $editUser->idUser = $_POST["idUser"];
    $editUser->ajaxEditUser();
}