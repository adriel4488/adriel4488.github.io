<?php
    require_once "conexion.php";

    $name = $apellidopaterno = $apellidomaterno = $email = $password = $direccion = "";
    $name_err = $apellidopaterno_err = $apellidomaterno_err = $email_err = $password_err = $direccion_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["name"]))){
            $name_err = "Por favor, ingrese un nombre";
        }else{
            $name = trim($_POST["name"]);
        }

        if(empty(trim($_POST["apellidopaterno"]))){
            $apellidopaterno_err = "Por favor, ingrese apellido";
        }else{
            $apellidopaterno = trim($_POST["apellidopaterno"]);
        }

        if(empty(trim($_POST["apellidomaterno"]))){
            $apellidomaterno_err = "Por favor, ingrese apellido";
        }else{
            $apellidomaterno = trim($_POST["apellidomaterno"]);
        }

        //validando email
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese un email";
        }else{
            $sql = "SELECT id_Cliente FROM cliente WHERE Email = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = trim($_POST["email"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "Este email ya se encuentra registrado";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Algo salio mal, intentalo más tarde";
                }
            }else{
                echo "aqui en el email ";
            }
            
        }

        //validando contraseña

        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingrese una contraseña";
        }elseif(strlen(trim($_POST["password"])) < 4){
            $password_err = "La contraseña debe de tener al menos 4 caracteres";
        } else{
            $password = trim($_POST["password"]);
        }

        if(empty(trim($_POST["direccion"]))){
            $direccion_err = "Por favor, ingrese su dirección";
        }else{
            $direccion = trim($_POST["direccion"]);
        }

        //Comprobando los errores de entrada antes de insertar los datos
        if(empty($name_err) && empty($apellidopaterno_err) && empty($apellidomaterno_err) && empty($email_err) && empty($password_err) && empty($direccion_err)){
            
            $sql = "INSERT INTO cliente VALUES (?, ?, ?, ?, ?, ?, ?)";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "issssss", $param_id_Cliente, $param_name, $param_apellidopaterno, $param_apellidomaterno, $param_email, $param_password, $param_direccion);

                //Estableciendo parametro
                $param_id_Cliente = 0;
                $param_name = $name;
                $param_apellidopaterno = $apellidopaterno;
                $param_apellidomaterno = $apellidomaterno;
                $param_email = $email;
                $param_password = $password;
                $param_direccion = $direccion;

                if(mysqli_stmt_execute($stmt)){
                    header("location: login.php");
                }else{
                    echo "Algo salio mal, intentalo despues";
                }
            }else{
                echo "NO SE REGISTRO 2";
            }
        }else{
            echo "NO SE REGISTRO 1";
        }
        mysqli_close($link);
    }
?>