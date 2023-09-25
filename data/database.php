<?php  
    // კავშირი მონაცემთა ბაზასთან
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=matamashe", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php  
    //insert data in games.json REALTIME every 60sec

    // JSON ფაილის მისამართი
    $jsonFilePath = "games.json";

    // ინტერვალი განახლებებს შორის (მაგ: 60 წამი)
    $updateInterval = 15;

    // SQL query to select data from the 'products' table
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY id DESC');
    $statement->execute();
    $games = $statement->fetchAll(PDO::FETCH_ASSOC);

    while ($games) {
        try {
                // Convert data to JSON format
            $jsonData = json_encode($games, JSON_PRETTY_PRINT);
    
            // Write JSON data to the file
            if (file_put_contents($jsonFilePath, $jsonData)) {
                echo "მონაცემები შეინახა ფაილში - $jsonFilePath წარმატებით, თარიღი:" . date('Y-m-d H:i:s') . PHP_EOL;
            } else {
                echo "მონაცემების შენახვა ვერ მოხერხდა ფაილში - $jsonFilePath." . PHP_EOL;
            }
    
            // Sleep for the specified interval before the next update
            sleep($updateInterval);
        } catch (PDOException $e) {
            sleep($updateInterval); // Sleep and retry after the specified interval if there is an error
        }
    }

?>