<?php

    session_start();

    function checkInput($input_value) {
        $input_value = trim($input_value);
        $input_value = stripslashes($input_value);
        $input_value = htmlspecialchars($input_value);
        return $input_value;
    }

    $lastname = "";
    $firstname = "";
    $email = "";
    $password = "";
    $password_retype = "";
    $_SESSION['logged_in'] = false;

    if (isset($_POST["register"])) {
        if (isset($_POST["lastname"], $_POST["firstname"], $_POST["email"], $_POST["password"], $_POST["password_retype"])) {
            if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
                
                $lastname = checkInput($_POST['lastname']);
                $firstname = checkInput($_POST['firstname']);
                $email = checkInput($_POST['email']);
                $password = checkInput($_POST['password']);
                $password_retype = checkInput($_POST['password_retype']);
                

                // Vérifie si les mots de passe sont identique.
                if ($password == $password_retype) {
    
                    // Verifie si l'utilisateur existe
                    $db = connectDB();
    
                    $q = $db->prepare('SELECT COUNT(email) as userExist FROM users WHERE email = :email;');
                    $q->execute(['email' => $email]);
                    $row = $q->fetch(PDO::FETCH_ASSOC);
                    
                    if ($row['userExist'] > 0) {
                        $_SESSION["error_register"] = "L'adresse email est déjà enregistrée.";
                    }
                    else {
                        // Ajoute l'utilisateur à la base de données.
                        $q = $db->prepare("INSERT INTO `users`(`lastname`, `firstname`, `email`, `pass`) VALUES (:lastname,:firstname,:email,:pass)");
                        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
                        $q->execute([
                            'lastname' => $lastname,
                            'firstname' => $firstname,
                            'email' => $email,
                            'pass' => $password_hashed,
                        ]);
                        $_SESSION["valid_register"]='Félicitation votre compte a été correctement crée.';
                        $_SESSION['logged_in'] = true;
                    } 
                }
                else
                {
                    $_SESSION["error_register"]='Les mots de passe ne sont pas identique.';
                }



            }
            else {
                $_SESSION["error_register"]='Tous les champs sont obligatoire';
            }

        }
    }
?>