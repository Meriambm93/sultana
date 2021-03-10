<?php
    function getProduct($id)
    {
        $db = connectDB();

        $q = $db->prepare('SELECT * FROM clothes WHERE id = :id;');
        $q->execute(['id' => $id]);
        $product = $q->fetchAll(PDO::FETCH_ASSOC);

        if ($product) {
            return $product;
        }
    }
?>