<?php
    // include 'models/connectDatabase.php';
    
    function getFavorites()
    {
        $db = connectDB();
        $q = $db->prepare('SELECT * FROM favorites;');
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
?>