<?php
require_once(__DIR__ . "/../models/user.model.php");
class UserController
{
    static public function getUserValidate()
    {
        if (isset($_POST['email'])) {
            $args = array (
                //'username' => FILTER_UNSAFE_RAW,
                'email' => FILTER_VALIDATE_EMAIL,
                'password' => array (
                    'filter' => FILTER_CALLBACK,
                    'options' => function($password){
                        if(strlen($password) < 8 || strlen($password) > 20){
                            return false;
                        }
                        if(
                            !preg_match('/[A-Z]/',$password) ||
                            !preg_match('/[0-9]/',$password) ||
                            !preg_match('/[\W]/',$password) 
                        ){
                            return false;
                        }
                        return $password;
                    }
                )
            );
            $input = filter_input_array(INPUT_POST,$args);
            if($input && $input['password'] !== false){
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
            } else {
                echo '<br><div class="alert alert-danger">Verificar los datos ingresados</div>';
            }
        }
    }

    static public function getUserAllCtr(){
        $result = UserModel::getUserAllMdl();
        return $result;
    }

    static public function getUserColCtr($column, $value){
        $result = UserModel::getUserColMdl($column,$value);
        return $result;
    }

    static public function putUserCtr(){
        if(isset($_POST['username'])){
            $args = array (
                'username' => FILTER_UNSAFE_RAW,
                'email' => FILTER_VALIDATE_EMAIL,
                'password' => array (
                    'filter' => FILTER_CALLBACK,
                    'options' => function($password){
                        if(strlen($password) < 8 || strlen($password) > 20){
                            return false;
                        }
                        if(
                            !preg_match('/[A-Z]/',$password) ||
                            !preg_match('/[0-9]/',$password) ||
                            !preg_match('/[\W]/',$password) 
                        ){
                            return false;
                        }
                        return $password;
                    }
                )
            );
            $input = filter_input_array(INPUT_POST,$args);

            if($input && $input['password'] !== false){
                $passcrypt = crypt($_POST['password'],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $data = array(
                    "username" => $_POST['username'],
                    "email" => $_POST['email'],
                    "password" => $passcrypt,
                );

                $result = UserModel::putUserMdl($data);
            
                if($result == true){
                    echo '<script>
                        swal({
                            type: "success",
                            title: "¡El usuario ha sido guardado correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "user";
                            }
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
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡Verificar los datos ingresados!",
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

    static public function updateUserCtr(){
        if(isset($_POST['username'])){
            $data = array(
                'username'=> $_POST['username'],
                'email'=> $_POST['email'],
                'password'=> $_POST['password'],
            );
            $result = UserModel::updateUserMdl($data);

            if($result == true){
                
                echo '<script>
                    swal({
                        type: "success",
                        title: "¡El usuario ha sido editado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result){
                        if(result.value){
                            window.location = "user";
                        }
                    });
                </script>';
                
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡Error al encontrar el usuario!",
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

    static public function deleteUserCtr(){

    }
}
