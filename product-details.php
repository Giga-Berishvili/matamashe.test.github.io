<?php 

$jsonFilePath = 'data/games.json'; // Replace with the actual URL or local file path

function getJsonData($url) {
    $jsonData = file_get_contents($url);

    if ($jsonData === false) {
        // Handle the error, e.g., file not found or failed to fetch
        return null;
    }

    return json_decode($jsonData, true); // true to decode as an associative array
}

// Fetch JSON data
$jsonData = getJsonData($jsonFilePath);
foreach($jsonData as $data) {
    if (isset($data['id']) && $data['id'] == 58) {
        // Access and use the data from the element with id = 0
        $productName = $data['productName'];
        $productPublisher = $data['productPublisher'];
        $categorie = $data['categorie'];
        $ps4SecondaryDef = $data['ps4SecondaryDef'];
        $ps4PrimaryDef = $data['ps4PrimaryDef'];
        $ps5SecondaryDef = $data['ps5SecondaryDef'];
        $ps5PrimaryDef = $data['ps5PrimaryDef'];
        $productEdition = $data['productEdition'];
        $ps4SecondaryCstm = $data['ps4SecondaryCstm'];
        $ps4PrimaryCstm = $data['ps4PrimaryCstm'];
        $ps5SecondaryCstm = $data['ps5SecondaryCstm'];
        $ps5PrimaryCstm = $data['ps5PrimaryCstm'];
        $productQuantity = $data['productQuantity'];
        $productDiscount = $data['productDiscount'];
        $productLeglinfo = $data['productLeglinfo'];
        $productRelease = $data['productRelease'];
        $productVoice = $data['productVoice'];
        $productTitles = $data['productTitles'];
        $genre = $data['genre'];
        $promocode = $data['promocode'];
        $promocodeDiscount = $data['promocodeDiscount'];
        $profileImg = $data['profileImg'];
        $coverImg = $data['coverImg'];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./product-details.css">
    <link rel="stylesheet" href="./products.css">
    <?php include './header.php' ?>
</head>
<body>
    <section class="background__image__for__product__details">
        <div><img src="<?php echo $coverImg ?>" alt=""></div>
    </section>

    <section class="product__details__main__section">
        <div class="product__details__main__bg">
            <aside class="product__details__left__side">
                 <div><img src="<?php echo $profileImg ?>" alt=""></div>
            </aside>

            <aside class="product__details__right__side">
                <div class="product__details__naming">
                    <span class="product__name"><?php echo $productName ?></span>
                    <span class="product__publisher"><?php echo $productPublisher ?></span>
                </div>

               <?php  
               if($categorie == 'ps4') {
                        ?>
                        
 <div class="categorie__select__menu">
                    <span class="categorie__headline_tag">კატეგორია:</span>
                            <div class="categorie__inputs">
                                <input id="ps4" value="ps4" type="radio" name="categorie">
                            </div>

                            <div class="categorie__labels">
                                <label class="categorie__label" for="ps4">PS4</label>
                            </div>
                </div>
 <?php
               }elseif($categorie == 'ps5') {
                    ?> <div class="categorie__select__menu">
                    <span class="categorie__headline_tag">კატეგორია:</span>
                            <div class="categorie__inputs">
                                <input id="ps5" value="ps5" type="radio" name="categorie">
                            </div>

                            <div class="categorie__labels">
                                <label class="categorie__label" for="ps5">PS5</label>
                            </div>
                </div> <?php
               }elseif($categorie == 'ps4, ps5') {
                ?> 
                 <div class="categorie__select__menu">
                    <span class="categorie__headline_tag">კატეგორია:</span>
                            <div class="categorie__inputs">
                                <input id="ps4" value="ps4" type="radio" name="categorie">
                                <input id="ps5" value="ps5" type="radio" name="categorie">
                            </div>

                            <div class="categorie__labels">
                                <label id="ps4Label" class="categorie__label" for="ps4">PS4</label>
                                <label id="ps5Label" class="categorie__label" for="ps5">PS5</label>
                            </div>
                </div>
                <?php
               } 
               ?>

                <div class="version__select__menu">
                    <span class="categorie__headline_tag">ვერსია:</span>
                            <div class="categorie__inputs">
                                <input id="primary" value="primary" type="radio" name="version">
                                <input id="secondary" value="secondary" type="radio" name="version">
                            </div>

                            <div class="version__labels">
                                <label id="primaryLabel" class="version__label" for="primary">Primary</label>
                                <label id="secondaryLabel" class="version__label" for="secondary">Secondary</label>
                            </div>
                </div>

                <div class="edition__select__menu">
                    <span class="categorie__headline_tag">გამოცემა:</span>
                            <div class="categorie__inputs">
                                <input id="StandardEdition" value="StandardEdition" type="radio" name="edition">
                                <input id="DeluxeEdition" value="DeluxeEdition" type="radio" name="edition">
                            </div>

                            <div class="version__labels">
                                <label id="standardLabel" class="edition__label" for="StandardEdition">Standard Edition</label>
                                <label id="customLabel" class="edition__label" for="DeluxeEdition">Deluxe Edition</label>
                            </div>
                </div>

                <div class="quantity__select__menu">
                <span class="categorie__headline_tag">რაოდენობა:</span>
                    <div class="quantity__bg">
                        <img class="arrowDisabled" id="lowQuantityArrow" src="./icons/angle arrow small right.svg" alt=""> <input value="1" type="text" name="" id="quantityInput"> <img id="highQuantityArrow" src="./icons/angle arrow small right.svg" alt="">
                    </div>
                </div>


                <div class="pricing__main__section">
                    <div class="old__price"><span  id="oldPrice"></span></div>
                    <div class="new__price"><span  id="newPrice"></span></div>
                </div>

                <div class="add__to__cart">
                    <div><button class="btn btn_primary">კალათაში დამატება</button></div>
                </div>

            </aside>
        </div>
    </section>

    <section class="product__description__sec">

                <section class="product__description__container">
                    <span>ლეგალური ინფორმაცია თამაშზე</span>
                    <div>
                        <p><?php 
                        echo $productLeglinfo;
                        ?></div>
                </section>

    </section>

    <!-- <section class="line_under_details">
        <hr>
    </section> -->
<section style="display: flex; justify-content:center; padding: 44px 0px 144px 0px">
    <span style="color: #fff; font-family: CapsBold; font-size: 26px; text-align:center;">მეტი დეტალი</span>
</section>
    <section class="product__account__details">
        <ul>
            <li><span>პლათფორმა:</span><span class="categorie__label__acc__det"><?php echo $categorie ?></span></li>
            <hr>
            <li><span>რელიზი:</span><span class="release__label__acc__det"><?php echo $productRelease ?></span></li>
            <hr>
            <li><span>გამომცემელი:</span><span class="publisher__label__acc__det"><?php echo $productPublisher ?></span></li>
            <hr>
            <li><span>ჟანრი:</span><span class="genre__label__acc__det"><?php echo $genre ?></span></li>
            <hr>
            <li><span>გახმოვანება:</span><span class="voice__label__acc__det"> <?php echo $productVoice ?></span></li>
            <hr>
            <li><span>ტიტრები:</span><span class="subtitles__label__acc__det"> <?php echo $productTitles ?></span></li>
            <hr>
        </ul>
    </section>
    <?php include './populargames.php' ?>

    <script src="product-details.js"></script>

    <script>
     const ps4SecondaryDef = <?php echo $ps4SecondaryDef ?>;
     const ps4PrimaryDef = <?php echo $ps4PrimaryDef ?>;
     const ps5SecondaryDef = <?php echo $ps5SecondaryDef ?>;
     const ps5PrimaryDef = <?php echo $ps5PrimaryDef ?>;

     const ps4SecondaryCstm = <?php echo $ps4SecondaryCstm ?>;
     const ps4PrimaryCstm = <?php echo $ps4PrimaryCstm ?>;
     const ps5SecondaryCstm = <?php echo $ps5SecondaryCstm ?>;
     const ps5PrimaryCstm = <?php echo $ps5PrimaryCstm ?>;
    const discount = <?php echo $productDiscount ?>;
    const oldPrice = document.getElementById('oldPrice');
    const newPrice = document.getElementById('newPrice');
    // JavaScript
    const editionInputs = document.querySelectorAll('input[name="edition"]');
    const versionInputs = document.querySelectorAll('input[name="version"]');
    const categorieInputs = document.querySelectorAll('input[name="categorie"]');

    editionInputs.forEach(function(input) {
        input.addEventListener('change', handleRadioChange);
    });

    versionInputs.forEach(function(input) {
        input.addEventListener('change', handleRadioChange);
    });

    categorieInputs.forEach(function(input) {
        input.addEventListener('change', handleRadioChange);
    });

    function handleRadioChange() {
        const selectedEdition = getSelectedValue(editionInputs);
        const selectedVersion = getSelectedValue(versionInputs);
        const selectedCategorie = getSelectedValue(categorieInputs);

        // Perform actions based on the selected values
        if (selectedEdition === 'StandardEdition' && selectedVersion === 'primary' && selectedCategorie === 'ps4') {
            if(discount != null) {
                newPrice.textContent = ps4PrimaryDef - discount + '₾';
                oldPrice.textContent = ps4PrimaryDef + '₾';
            }else {
                newPrice.textContent = ps4PrimaryDef + '₾';
            }
        } else if (selectedEdition === 'StandardEdition' && selectedVersion === 'secondary' && selectedCategorie === 'ps4') {
            if(discount != null) {
                newPrice.textContent = ps4SecondaryDef - discount + '₾';
                oldPrice.textContent = ps4SecondaryDef + '₾';
            }else {
                newPrice.textContent = ps4SecondaryDef + '₾';
            }
        }else if (selectedEdition === 'StandardEdition' && selectedVersion === 'primary' && selectedCategorie === 'ps5') {
            if(discount != null) {
                newPrice.textContent = ps5PrimaryDef - discount + '₾';
                oldPrice.textContent = ps5PrimaryDef + '₾';
            }else {
                newPrice.textContent = ps5PrimaryDef + '₾';
            }
        }else if (selectedEdition === 'StandardEdition' && selectedVersion === 'secondary' && selectedCategorie === 'ps5') {
            if(discount != null) {
                newPrice.textContent = ps5SecondaryDef - discount + '₾';
                oldPrice.textContent = ps5SecondaryDef + '₾';
            }else {
                newPrice.textContent = ps5SecondaryDef + '₾';
            }
        }else if (selectedEdition === 'DeluxeEdition' && selectedVersion === 'primary' && selectedCategorie === 'ps4') {
            if(discount != null) {
                newPrice.textContent = ps4PrimaryCstm - discount + '₾';
                oldPrice.textContent = ps4PrimaryCstm + '₾';
            }else {
                newPrice.textContent = ps4PrimaryCstm + '₾';
            }
        }else if (selectedEdition === 'DeluxeEdition' && selectedVersion === 'secondary' && selectedCategorie === 'ps4') {
            if(discount != null) {
                newPrice.textContent = ps4SecondaryCstm - discount + '₾';
                oldPrice.textContent = ps4SecondaryCstm + '₾';
            }else {
                newPrice.textContent = ps4SecondaryCstm + '₾';
            }
        }else if (selectedEdition === 'DeluxeEdition' && selectedVersion === 'primary' && selectedCategorie === 'ps5') {
            if(discount != null) {
                newPrice.textContent = ps5PrimaryCstm - discount + '₾';
                oldPrice.textContent = ps5PrimaryCstm + '₾';
            }else {
                newPrice.textContent = ps5PrimaryCstm + '₾';
            }
        }else if (selectedEdition === 'DeluxeEdition' && selectedVersion === 'secondary' && selectedCategorie === 'ps5') {
            if(discount != null) {
                newPrice.textContent = ps5SecondaryCstm - discount + '₾';
                oldPrice.textContent = ps5SecondaryCstm + '₾';
            }else {
                newPrice.textContent = ps5SecondaryCstm + '₾';
            }
        }
    }

    function getSelectedValue(inputs) {
        for (const input of inputs) {
            if (input.checked) {
                return input.value;
            }
        }
        return null;
    }
</script>
</body>
</html>
<?php include './footer.php' ?>