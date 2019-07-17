<?php

    //inicializar la sesion
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.html");
        exit;
    }

    require_once "conexion.php";

    $email = $password = "";
    $email_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese el correo";
        }else{
            $email = trim($_POST["email"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingrese contraseña";
        }else{
            $password = trim($_POST["password"]); 
        }


        //Validar credenciales

        if(empty($email_err) && empty($password_err)){
            $sql = "SELECT id_Cliente, Nombre, apellidoPaterno, Email, Password FROM `cliente` WHERE Email = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = $email;
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                }

                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id_Cliente, $Nombre, $apellidoPaterno, $Email, $Password1);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $Password1){
                            session_start();

                            //Almecenando
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id_Cliente;
                            $_SESSION["nombre"] = $Nombre;
                            $_SESSION["apellidoPaterno"] = $apellidoPaterno;
                            $_SESSION["email"] = $email;
                            header("location: index.php");
                        }else{
                            $password_err = "La contraseña que has introducido no es valida";
                        }
                    }else{
                        $email_err = "no se ha encontrado ninguna cuenta con ese correo";
                    }
                }else{
                    $email_err = "no se ha encontrado ninguna cuenta con ese correo";
                }
            }
        }
        mysqli_close($link);
    }

?>