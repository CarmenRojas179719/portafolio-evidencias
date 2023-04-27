<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $user = array(
            'username' => $username,
            'email' => $email,
            'comment' => $comment
        );

        // Guardar usuario en base de datos o archivo
        
        echo "Usuario registrado con éxito!";
    }
    ?>