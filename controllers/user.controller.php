<?php
require_once("models/user.model.php");
class UserController
{
    static public function getUserValidate()
    {
        if (isset($_POST['email'])) {
            $result = UserModel::getUser($_POST['email'], $_POST['password']);

            if ($result['email'] == $_POST['email'] && $result['password'] == $_POST['password']) {
                
                $_SESSION['success'] = "OK";
                $_SESSION['id'] = $result['id'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['password'] = $result['password'];

                echo 
                '<script>
                    window.location = "dashboard";
                </script>';
            } else {
                echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
            }
        }
    }
}
