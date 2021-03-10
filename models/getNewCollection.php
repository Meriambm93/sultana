<?php
    function getNewCollection()
    {
        $db = connectDB();
        $q = $db->prepare('SELECT * FROM clothes WHERE is_new = 1;');
        $q->execute();
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
?>