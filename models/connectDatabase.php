<?php
    function connectDB() {
        try
        {
            $db = new PDO('mysql:host=home.3wa.io;port=3307;dbname=sev-03_meriamb_sultana;charset=utf8','meriamb', '00911f15MjM0OTA0NWQ2YmExY2VkOTdlNzFlZWEz8089f5b0');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
?>