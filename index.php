<?php
    include 'models/connectDatabase.php';
    include 'models/getFavorites.php';
    include 'models/getInstaPhoto.php';

    $content = 'views/indexView.phtml';
    include 'template.php';
?>