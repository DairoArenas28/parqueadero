<?php
require_once("models/user.model.php");
class UserController
{
    static public function getUserValidate()
    {
        if (isset($_POST['email'])) {

            $passcrypt = crypt($_POST['password'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            $result = UserModel::getUser($_POST['email']);
            
            if ($result['email'] == $_POST['email'] && $result['password'] == $passcrypt) {
                
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

    static public function getUserAllCtr(){
        $result = UserModel::getUserAllMdl();
        return $result;
    }

    static public function putUserCtr(){
        if(isset($_POST['username'])){
            $passcrypt = crypt($_POST['password'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            $data = array(
                "username" => $_POST['username'],
                "email" => $_POST['email'],
                "password" => $passcrypt,
            );

            $result = UserModel::putUserMdl($data);

            if($result){
                echo '<script>
					swal({
						type: "success",
						title: "¡El usuario ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "user";
					});
					</script>';
            } else {
                echo '<script>
                swal({
                    type: "error",
                    title: "¡Error al guardar el usuario!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        window.location = "user";
                    }
                });
                </script>';
            }
        }
    }
}
