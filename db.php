<?php  
    // კავშირი მონაცემთა ბაზასთან
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=matamashe", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>