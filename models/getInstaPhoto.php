<?php
    function getInstaPhoto()
    {
        $db = connectDB();
        $q = $db->prepare('SELECT * FROM insta_photo;');
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
?>