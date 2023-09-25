    <?php
// Include your database connection here
include './db.php';

if (isset($_POST['option'])) {
    $option = $_POST['option'];

    switch ($option) {
        case "priceLowToHigh":
            $statement = $pdo->prepare('SELECT * FROM products ORDER BY ps4SecondaryDef DESC');
            break;
        case "priceHighToLow":
            $statement = $pdo->prepare('SELECT * FROM products ORDER BY ps4SecondaryDef ASC');
            break;
        default:
            $statement = $pdo->prepare('SELECT * FROM products ORDER BY upload_date DESC');
    }

    $statement->execute();
    $games = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Generate HTML for the game list
    foreach($games as $game) {
        ?>
                <link rel="stylesheet" href="./products.css">
            <a class="popular__games__box_m" href="./product-details.php?id=<?php echo $game['id'] ?>">
                    <div class="popular__games__box__cont_m">
                        <aside class="upper_side_popular_games_m">
                            <?php  
                            if($game['categorie'] == 'ps4') {
                                ?> <div><span class="categorie">PS4</span></div> <?php
                            }elseif($game['categorie'] == 'ps5'){
                                ?> <div><span class="categorie">PS5</span></div> <?php
                            }elseif($game['categorie'] == 'ps4, ps5') {
                                ?> <div><span class="categorie">PS4</span><span class="categorie">PS5</span></div> <?php
                            }
                            ?>
                            <img class="product_box_popular_img_m" src="<?php echo $game['profileImg']; ?>" alt="">
                        </aside>
                        <aside class="lower_side_popular_games_m">
                            <?php if($game['available'] == 'preorder') {
                                ?> <span>PRE-ORDER</span> <?php
                            }else {
    
                            } ?>
                            <h2><?php echo $game['productName']; ?></h2>
                            <h1>
                                <?php 
                                if($game['ps4SecondaryDef'] != null) {
                                    echo $game['ps4SecondaryDef'], '₾';
                                }elseif($game['ps4SecondaryDef'] == null) {
                                    echo $game['ps5SecondaryDef'], '₾';
                                }
                                ?>
                            </h1>
                        </aside>
                    </div>
                </a>
        <?php
    }
}


if(!isset($_POST['option'])) {

    $statement = $pdo->prepare('SELECT * FROM products ORDER BY upload_date DESC');

    $statement->execute();
    $games = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($games as $game) {
        ?>
                <link rel="stylesheet" href="./products.css">
            <a class="popular__games__box_m" href="./product-details.php?id=<?php echo $game['id'] ?>">
                    <div class="popular__games__box__cont_m">
                        <aside class="upper_side_popular_games_m">
                            <?php  
                            if($game['categorie'] == 'ps4') {
                                ?> <div><span class="categorie">PS4</span></div> <?php
                            }elseif($game['categorie'] == 'ps5'){
                                ?> <div><span class="categorie">PS5</span></div> <?php
                            }elseif($game['categorie'] == 'ps4, ps5') {
                                ?> <div><span class="categorie">PS4</span><span class="categorie">PS5</span></div> <?php
                            }
                            ?>
                            <img class="product_box_popular_img_m" src="<?php echo $game['profileImg']; ?>" alt="">
                        </aside>
                        <aside class="lower_side_popular_games_m">
                            <?php if($game['available'] == 'preorder') {
                                ?> <span>PRE-ORDER</span> <?php
                            }else {
    
                            } ?>
                            <h2><?php echo $game['productName']; ?></h2>
                            <h1>
                                <?php 
                                if($game['ps4SecondaryDef'] != null) {
                                    echo $game['ps4SecondaryDef'], '₾';
                                }elseif($game['ps4SecondaryDef'] == null) {
                                    echo $game['ps5SecondaryDef'], '₾';
                                }
                                ?>
                            </h1>
                        </aside>
                    </div>
                </a>
        <?php
    }
}


?>
