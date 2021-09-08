<?php
    function connectDB() {
        try
        {
            $db = new PDO('mysql:host=localhost;port=3306;dbname=sultana;charset=utf8','root', '');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
?>