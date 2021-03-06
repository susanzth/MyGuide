<?php

    //Un tray para que intente conectar a la DB.
    try{
        //Colocamos los datos de conexión utilizando OOP y PDO.
        $connection = new PDO("mysql:host=localhost; dbname=curso_php",
            "root", "");
        //Establecemos las propiedades de la conexión.
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Guardamos la sentencia preparada con marcadores en esta variable:
        $sql = "select * from user_pass where username= :user and password = :pass";
        //Aqui preparamos la consulta y guardamos el array en $result.
        $result = $connection->prepare($sql);
        //Aquí creamos una variable para almacenar el user desde el formulario.
        //Esta función convierte cualquier símbolo html para evitar inyección sql.
        $user = htmlentities(addslashes($_POST["txt-user"]));
        //Aquí creamos una variable para almacenar la contraseña desde el formulario.
        $pass = htmlentities(addslashes($_POST["txt-pass"]));
        //Aquí comparamos el resultado de la consulta con lo que obtuvimos del formulario.
        $result->bindValue(":user", $user);
        $result->bindValue(":pass", $pass);
        //Ejecutamos la sentenci sql
        $result->execute();
        //Utilizamos una función paa evaluar si la comparación es verdadero o falso
        $register = $result->rowCount();
        if ($register!=0){
            //Con sesiones podemos redifirig a una pagina solo si el usuario esta registrado
            session_start();
            //Aquí estamos declarando la variable usuario como super global
            //y le asignamos el valor obtenido del cuadro de texto del formulario.
            $_SESSION["usuario"]=$_POST["txt-user"];
            header("Location:../php-controlPanel.php");
        }else{
            //Si no coninciden los datos, es decir, no esta registrado, lo redirigimos a la página de login
            header ("Location:../php-login.php");
        }
    }//Si no conecta a la DB hará o siguiente
    catch (Exception $e) {//Guarda el mensaje de error en la variable $e
    }
?>