<?php 
    session_start();

    include 'models/connectDatabase.php';

    function checkInput($input_value) {
        $input_value = trim($input_value);
        $input_value = stripslashes($input_value);
        $input_value = htmlspecialchars($input_value);
        return $input_value;
    }

    $email = '';
    $password = '';

    if (isset($_POST["login"])) {
        if (isset($_POST["email"], $_POST["password"])) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                
                $db = connectDB();

                $email = checkInput($_POST['email']);
                $password = checkInput($_POST['password']);

                $q = $db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
                $q->execute(array(':email'=>$email));
                $userRow = $q->fetch(PDO::FETCH_ASSOC);
                if($q->rowCount() > 0)
                {
                   if(password_verify($password, $userRow['pass']))
                   {
                      $_SESSION['logged_in'] = true;
                   }
                   else
                   {
                      $_SESSION['error_login'] = "L'adresse email ou le mot de passe est incorrecte.";
                   }
                }
            }
            else {
                $_SESSION['error_login'] = "Les champs sont obligatoire.";
            }
        }
    }

    $content = 'views/loginView.phtml';
    include 'template.php';
?>