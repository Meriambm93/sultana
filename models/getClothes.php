<?php
    function getClothes()
    {
        $db = connectDB();
        $q = $db->prepare('SELECT * FROM clothes WHERE is_new = 0;');
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
?>