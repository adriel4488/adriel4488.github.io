<?php
    include 'codeRegister.php'
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
</head>

<body>
    <div class="container-all">

        <div class="ctn-form">
            <img src="" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Nombre</label>
                <input type="text" name="name">
                <span class="msg-error"><?php echo $name_err ?></span>
                <label for="">Apellido materno</label>
                <input type="text" name="apellidopaterno">
                <span class="msg-error"><?php echo $apellidopaterno_err ?></span>
                <label for="">Apellido paterno</label>
                <input type="text" name="apellidomaterno">
                <span class="msg-error"><?php echo $apellidomaterno_err ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err ?></span>
                <label for="">Password</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err ?></span>
                <label for="">Dirección</label>
                <input type="text" name="direccion">
                <span class="msg-error"><?php echo $direccion_err ?></span>

                <input type="submit" value="Registrar">

            </form>

            <span class="text-footer">Ya te has registrado?<a href="login.php">Iniciar
                    sesion</a></span>

        </div>
        <div class="ctn-text">
            <div class="capa"></div>

        </div>

    </div>
</body>

</html>