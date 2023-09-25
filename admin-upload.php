<?php
include 'db.php';
include 'functions.php';
$errors = '';
$success = '';

if(isset($_POST['uploadProduct'])) {

    //ცვლადები POST ის ინფორმაციით
    $productName = $_POST['productName'];
    $productPublisher = $_POST['productPublisher'];
    $categorie = $_POST['categorie'];
    $ps4SecondaryDef = $_POST['ps4SecondaryDef'];
    $ps4PrimaryDef = $_POST['ps4PrimaryDef'];
    $ps5SecondaryDef = $_POST['ps5SecondaryDef'];
    $ps5PrimaryDef = $_POST['ps5PrimaryDef'];
    $productEdition = $_POST['productEdition'];
    $ps4SecondaryCstm = $_POST['ps4SecondaryCstm'];
    $ps4PrimaryCstm = $_POST['ps4PrimaryCstm'];
    $ps5SecondaryCstm = $_POST['ps5SecondaryCstm'];
    $ps5PrimaryCstm = $_POST['ps5PrimaryCstm'];
    $productQuantity = $_POST['productQuantity'];
    $productDiscount = $_POST['productDiscount'];
    $productLeglinfo = $_POST['productLeglinfo'];
    $productRelease = $_POST['productRelease'];
    $productVoice = $_POST['productVoice'];
    $productTitles = $_POST['productTitles'];
    $genre = $_POST['genre'];
    $promocode = $_POST['promocode'];
    $promocodeDiscount = $_POST['promocodeDiscount'];

    //სურათის ამოღება POST დან
    $imgProfile = $_FILES['profileImg'] ?? null;
        $imgProfilePath = '';

    $imgCover = $_FILES['coverImg'] ?? null;
        $imgCoverPath = '';


    //შექმენი ახალი დირექტორია images
    if(!is_dir('images')){
        mkdir('images');
    }

//------>>>> პროფილის სურათის ატვირთვა, კომპრესირება, ვალიდაცია <<<<<----------//

// Handle $imgProfile
if ($imgProfile) {
    // Set the maximum allowed file size in bytes (2MB)
    $maxFileSize = 2 * 1024 * 1024; // 2MB

    // Generate a unique directory name
    $uniqueDirectoryName = randomString(10);
    $directoryPath = 'images/' . $uniqueDirectoryName . '/';

    // Create the directory if it doesn't exist
    if (!is_dir($directoryPath)) {
        mkdir($directoryPath, 0755, true);
    }

    // Get the file extension
    $fileExtension = pathinfo($imgProfile['name'], PATHINFO_EXTENSION);

    // Generate a unique file name
    $uniqueFileName = randomString(10) . '.' . $fileExtension;
    $imgProfilePath = $directoryPath . $uniqueFileName;

    // Check if the file size exceeds the maximum allowed size
    if ($imgProfile['size'] <= $maxFileSize) {
        move_uploaded_file($imgProfile['tmp_name'], $imgProfilePath);
    } else {
        // Compress and save the image
        compressAndSaveImage($imgProfile['tmp_name'], $imgProfilePath, 75, $maxFileSize);
    }
}

// Handle $imgCover
if ($imgCover) {
    // Set the maximum allowed file size in bytes (2MB)
    $maxFileSize = 2 * 1024 * 1024; // 2MB

    // Generate a unique directory name
    $uniqueDirectoryName = randomString(10);
    $directoryPath = 'images/' . $uniqueDirectoryName . '/';

    // Create the directory if it doesn't exist
    if (!is_dir($directoryPath)) {
        mkdir($directoryPath, 0755, true);
    }

    // Get the file extension
    $fileExtension = pathinfo($imgCover['name'], PATHINFO_EXTENSION);

    // Generate a unique file name
    $uniqueFileName = randomString(10) . '.' . $fileExtension;
    $imgCoverPath = $directoryPath . $uniqueFileName;

    // Check if the file size exceeds the maximum allowed size
    if ($imgCover['size'] <= $maxFileSize) {
        move_uploaded_file($imgCover['tmp_name'], $imgCoverPath);
    } else {
        // Compress and save the image
        compressAndSaveImage($imgCover['tmp_name'], $imgCoverPath, 75, $maxFileSize);
    }
}


    //შეინახე მონაცემთა ბაზაში
    $statement = $pdo->prepare("INSERT INTO `products` (productName, productPublisher, categorie, ps4SecondaryDef, ps4PrimaryDef, ps5SecondaryDef, ps5PrimaryDef, profileImg, coverImg, productEdition, ps4SecondaryCstm, ps4PrimaryCstm, ps5SecondaryCstm, ps5PrimaryCstm, productQuantity, productDiscount, productLeglinfo, productRelease, productVoice, productTitles, genre, promocode, promocodeDiscount) 
    VALUES (:productName, :productPublisher, :categorie, :ps4SecondaryDef, :ps4PrimaryDef, :ps5SecondaryDef, :ps5PrimaryDef, :profileImg, :coverImg, :productEdition, :ps4SecondaryCstm, :ps4PrimaryCstm, :ps5SecondaryCstm, :ps5PrimaryCstm, :productQuantity, :productDiscount, :productLeglinfo, :productRelease, :productVoice, :productTitles, :genre, :promocode, :promocodeDiscount)");


    //bind Values
    $statement->bindValue(':productName', $productName);
    $statement->bindValue(':productPublisher', $productPublisher);
    $statement->bindValue(':categorie', $categorie);
    $statement->bindValue(':ps4SecondaryDef', $ps4SecondaryDef);
    $statement->bindValue(':ps4PrimaryDef', $ps4PrimaryDef);
    $statement->bindValue(':ps5SecondaryDef', $ps5SecondaryDef);
    $statement->bindValue(':ps5PrimaryDef', $ps5PrimaryDef);
    $statement->bindValue(':profileImg', $imgProfilePath);
    $statement->bindValue(':coverImg', $imgCoverPath);
    $statement->bindValue(':productEdition', $productEdition);
    $statement->bindValue(':ps4SecondaryCstm', $ps4SecondaryCstm);
    $statement->bindValue(':ps4PrimaryCstm', $ps4PrimaryCstm);
    $statement->bindValue(':ps5SecondaryCstm', $ps5SecondaryCstm);
    $statement->bindValue(':ps5PrimaryCstm', $ps5PrimaryCstm);
    $statement->bindValue(':productQuantity', $productQuantity);
    $statement->bindValue(':productDiscount', $productDiscount);
    $statement->bindValue(':productLeglinfo', $productLeglinfo);
    $statement->bindValue(':productRelease', $productRelease);
    $statement->bindValue(':productVoice', $productVoice);
    $statement->bindValue(':productTitles', $productTitles);
    $statement->bindValue(':genre', $genre);
    $statement->bindValue(':promocode', $promocode);
    $statement->bindValue(':promocodeDiscount', $promocodeDiscount);

    //execution
    if($genre == []) {
        $errors = 'აუცილებელია მიუთითოთ ჟანრი!';
    }elseif($categorie == []) {
        $errors = 'აუცილებელია მიუთითოთ კატეგორია!';
    }else {
        $statement->execute();
        $success = 'პროდუქტი წარმატებით აიტვირთა!';
    }
}


?>

<style>
    *{
        color: #fff;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="./products.css">
</head>
<body>

<section class="alerts_admin_panelCnt">
    <section class="alerts_admin_panel">
        <div class="alert alert_<?php if($errors != '') { echo 'error'; } elseif($success != '') { echo 'success'; } ?>">
            <span><?php if($errors != '') { echo $errors; } else { echo $success; } ?></span>
        </div>
    </section>
</section>

<section class="upload_products_main_wrapper">
        <aside class="upload_left_aside">
            <?php include './admin-nav.php' ?>
        </aside>

        <form enctype="multipart/form-data" method="POST" action="">

                <aside class="upload_right_aside">
            <div class="upload_product_bg">
                <div class="upload_header">პროდუქტის ატვირთვა</div>

                <div class="upload_info_about_game">
                    <span class="div_heading_spans">ინფორმაცია თამაშზე</span>
                    <div class="game_name_publisher">
                        <div class="name_input_contact input">
                                <span>თამაშის სახელი</span>
                                <input required name="productName" placeholder="შეიყვანეთ სახელი..." type="text">
                        </div>

                        <div class="name_input_contact input">
                            <span>თამაშის გამომცემელი</span>
                            <input required name="productPublisher" placeholder="შეიყვანეთ გამომცემელი..." type="text">
                        </div>
                    </div>
                </div>



                <div class="choose_categorie_div">
                    <span class="div_heading_spans">აირჩიეთ კატეგორია</span>

                    <div class="ctg_wrap">
                        <div class="ps4_cth_choose">
                            <input type="checkbox" name="categorie" id="ps4" value="ps4">
                            <label for="ps4">PS4</label>
                            <svg class="checkmarks" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M4.60474 8.78012C4.52078 8.78378 4.43802 8.75913 4.36974 8.71012L2.12474 6.85512C1.9801 6.72706 1.95832 6.50928 2.07474 6.35512C2.20258 6.21115 2.41867 6.18738 2.57474 6.30012L4.57474 7.93012L9.82474 3.07512C9.98 2.95856 10.1986 2.97977 10.3285 3.12401C10.4584 3.26825 10.4568 3.48783 10.3247 3.63012L4.85974 8.68012C4.79013 8.74399 4.69922 8.77965 4.60474 8.78012Z" fill="#9747FF"/>
                            </svg>
                        </div>

                        <div class="ps5_cth_choose">
                            <input type="checkbox" name="categorie" id="ps5" value="ps5">
                            <label for="ps5">PS5</label>
                            <svg class="checkmarks" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M4.60474 8.78012C4.52078 8.78378 4.43802 8.75913 4.36974 8.71012L2.12474 6.85512C1.9801 6.72706 1.95832 6.50928 2.07474 6.35512C2.20258 6.21115 2.41867 6.18738 2.57474 6.30012L4.57474 7.93012L9.82474 3.07512C9.98 2.95856 10.1986 2.97977 10.3285 3.12401C10.4584 3.26825 10.4568 3.48783 10.3247 3.63012L4.85974 8.68012C4.79013 8.74399 4.69922 8.77965 4.60474 8.78012Z" fill="#9747FF"/>
                            </svg>
                        </div>

                        <div class="ps5_cth_choose">
                            <input type="checkbox" name="categorie" id="bothCtg" value="ps4, ps5">
                            <label for="bothCtg">ორივე</label>
                            <svg class="checkmarks" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M4.60474 8.78012C4.52078 8.78378 4.43802 8.75913 4.36974 8.71012L2.12474 6.85512C1.9801 6.72706 1.95832 6.50928 2.07474 6.35512C2.20258 6.21115 2.41867 6.18738 2.57474 6.30012L4.57474 7.93012L9.82474 3.07512C9.98 2.95856 10.1986 2.97977 10.3285 3.12401C10.4584 3.26825 10.4568 3.48783 10.3247 3.63012L4.85974 8.68012C4.79013 8.74399 4.69922 8.77965 4.60474 8.78012Z" fill="#9747FF"/>
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="choose_categorie_div">
                    <span class="div_heading_spans">ხელმისაწვდომია</span>

                    <div class="ctg_wrap">
                        <div class="ps4_cth_choose">
                            <input type="checkbox" name="available" id="now" value="now">
                            <label for="now">ახლავე</label>
                            <svg class="checkmarks" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M4.60474 8.78012C4.52078 8.78378 4.43802 8.75913 4.36974 8.71012L2.12474 6.85512C1.9801 6.72706 1.95832 6.50928 2.07474 6.35512C2.20258 6.21115 2.41867 6.18738 2.57474 6.30012L4.57474 7.93012L9.82474 3.07512C9.98 2.95856 10.1986 2.97977 10.3285 3.12401C10.4584 3.26825 10.4568 3.48783 10.3247 3.63012L4.85974 8.68012C4.79013 8.74399 4.69922 8.77965 4.60474 8.78012Z" fill="#9747FF"/>
                            </svg>
                        </div>

                        <div class="ps5_cth_choose">
                            <input type="checkbox" name="available" id="preorder" value="preorder">
                            <label for="preorder">წინასწარი შეკვეთით</label>
                            <svg class="checkmarks" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M4.60474 8.78012C4.52078 8.78378 4.43802 8.75913 4.36974 8.71012L2.12474 6.85512C1.9801 6.72706 1.95832 6.50928 2.07474 6.35512C2.20258 6.21115 2.41867 6.18738 2.57474 6.30012L4.57474 7.93012L9.82474 3.07512C9.98 2.95856 10.1986 2.97977 10.3285 3.12401C10.4584 3.26825 10.4568 3.48783 10.3247 3.63012L4.85974 8.68012C4.79013 8.74399 4.69922 8.77965 4.60474 8.78012Z" fill="#9747FF"/>
                            </svg>
                        </div>
                    </div>
                </div>

<!-- 
                
                <div class="choose_edition_quantity">
                    
                    <span class="div_heading_spans">რამდენი გამოცემა აქვს თამაშს</span>

                    <div class="radio_btn_editions">
                        <div class="radio_btn edition1">
                            <input type="radio" name="edition_quantity" id="1" value="1">
                            <label for="1">1</label>
                            <div class="radioCenter"></div>
                        </div>
                        <div class="radio_btn edition2">
                            <input type="radio" name="edition_quantity" id="2" value="2">
                            <label for="2">2</label>
                            <div class="radioCenter"></div>
                        </div>
                        <div class="radio_btn edition3">
                            <input type="radio" name="edition_quantity" id="3" value="3">
                            <label for="3">3</label>
                            <div class="radioCenter"></div>
                        </div>
                        <div class="radio_btn edition4">
                            <input type="radio" name="edition_quantity" id="4" value="4">
                            <label for="4">4</label>
                            <div class="radioCenter"></div>
                        </div>
                        <div class="radio_btn edition5">
                            <input type="radio" name="edition_quantity" id="5" value="5">
                            <label for="5">5</label>
                            <div class="radioCenter"></div>
                        </div>
                        <div class="radio_btn edition6">
                            <input type="radio" name="edition_quantity" id="6" value="6">
                            <label for="6">6</label>
                            <div class="radioCenter"></div>
                        </div>
                    </div>
                </div> -->


                <div class="pricing_default_editions_behavior">
                <span class="div_heading_spans">ფასები (standard edition)</span>

                <div class="inputs_for_default_pricing">
                    <div class="ps4_secondary_primary_pricing">
                        <div class="name_input_contact input">
                                <span>PS4 Secondary (₾)</span>
                                <input name="ps4SecondaryDef" placeholder="შეიყვანეთ PS4 Secondary ფასი..." type="text">
                        </div>
                        <div class="name_input_contact input">
                                <span>PS4 Primary (₾)</span>
                                <input name="ps4PrimaryDef" placeholder="შეიყვანეთ PS4 Primary ფასი..." type="text">
                        </div>
                    </div>

                    <div class="ps5_secondary_primary_pricing">
                        <div class="name_input_contact input">
                                    <span>PS5 Secondary (₾)</span>
                                    <input name="ps5SecondaryDef" placeholder="შეიყვანეთ PS5 Secondary ფასი..." type="text">
                            </div>
                            <div class="name_input_contact input">
                                    <span>PS5 Primary (₾)</span>
                                    <input name="ps5PrimaryDef"placeholder="შეიყვანეთ PS5 Primary ფასი..." type="text">
                        </div>
                    </div>

                    <div class="default_edition_profile_images">
    
                            <div class="image_input">
                                <label class="profileImgDefault" for="profileImgDefault">
                                    <input required name="profileImg" id="profileImgDefault" type="file">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6896 7.46L16.4196 11.18C16.5778 11.3376 16.6667 11.5517 16.6667 11.775C16.6667 11.9983 16.5778 12.2124 16.4196 12.37C16.087 12.6887 15.5623 12.6887 15.2296 12.37L12.9396 10.07L12.9396 20.16C12.9396 20.6239 12.5636 21 12.0996 21C11.6357 21 11.2596 20.6239 11.2596 20.16L11.2596 10.07L8.96963 12.37C8.637 12.6887 8.11227 12.6887 7.77963 12.37C7.62147 12.2124 7.53257 11.9983 7.53257 11.775C7.53257 11.5517 7.62147 11.3376 7.77963 11.18L11.5096 7.46C11.6636 7.29911 11.877 7.20869 12.0996 7.21C12.3228 7.20625 12.5371 7.29707 12.6896 7.46Z" fill="white"/>
                                    <path d="M6.87963 15.58L5.66962 15.58C3.15338 15.5253 1.15497 13.4464 1.19963 10.93L1.19963 7.12C1.15497 4.60356 3.15338 2.52467 5.66963 2.47L18.5296 2.55C21.0459 2.60468 23.0443 4.68356 22.9996 7.2L22.9996 11.01C23.0291 12.2238 22.5744 13.3995 21.7357 14.2775C20.8971 15.1556 19.7435 15.6638 18.5296 15.69L17.3196 15.69C16.8557 15.69 16.4796 15.3139 16.4796 14.85C16.4796 14.3861 16.8557 14.01 17.3196 14.01L18.5296 14.01C19.299 13.9866 20.0269 13.6563 20.5511 13.0926C21.0753 12.529 21.3521 11.779 21.3196 11.01L21.3196 7.23C21.3521 6.46098 21.0753 5.71098 20.5511 5.14735C20.027 4.58372 19.299 4.25337 18.5296 4.23L5.66963 4.09C4.90028 4.11337 4.1723 4.44372 3.64813 5.00735C3.12395 5.57098 2.8472 6.32098 2.87963 7.09L2.87963 10.9C2.8472 11.669 3.12395 12.419 3.64813 12.9826C4.1723 13.5463 4.90028 13.8766 5.66962 13.9L6.87963 13.9C7.34355 13.9 7.71963 14.2761 7.71963 14.74C7.71963 15.2039 7.34355 15.58 6.87963 15.58Z" fill="white"/>
                                    </svg>
                                    <span class="displayFileName">პროფილის სურათის ატვირთვა</span>
                                </label>
                            </div>

                            <div class="image_input">
                                <label class="profileImgDefault" for="coverImgDefault">
                                    <input required name="coverImg" id="coverImgDefault" type="file">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.6896 7.46L16.4196 11.18C16.5778 11.3376 16.6667 11.5517 16.6667 11.775C16.6667 11.9983 16.5778 12.2124 16.4196 12.37C16.087 12.6887 15.5623 12.6887 15.2296 12.37L12.9396 10.07L12.9396 20.16C12.9396 20.6239 12.5636 21 12.0996 21C11.6357 21 11.2596 20.6239 11.2596 20.16L11.2596 10.07L8.96963 12.37C8.637 12.6887 8.11227 12.6887 7.77963 12.37C7.62147 12.2124 7.53257 11.9983 7.53257 11.775C7.53257 11.5517 7.62147 11.3376 7.77963 11.18L11.5096 7.46C11.6636 7.29911 11.877 7.20869 12.0996 7.21C12.3228 7.20625 12.5371 7.29707 12.6896 7.46Z" fill="white"/>
                                    <path d="M6.87963 15.58L5.66962 15.58C3.15338 15.5253 1.15497 13.4464 1.19963 10.93L1.19963 7.12C1.15497 4.60356 3.15338 2.52467 5.66963 2.47L18.5296 2.55C21.0459 2.60468 23.0443 4.68356 22.9996 7.2L22.9996 11.01C23.0291 12.2238 22.5744 13.3995 21.7357 14.2775C20.8971 15.1556 19.7435 15.6638 18.5296 15.69L17.3196 15.69C16.8557 15.69 16.4796 15.3139 16.4796 14.85C16.4796 14.3861 16.8557 14.01 17.3196 14.01L18.5296 14.01C19.299 13.9866 20.0269 13.6563 20.5511 13.0926C21.0753 12.529 21.3521 11.779 21.3196 11.01L21.3196 7.23C21.3521 6.46098 21.0753 5.71098 20.5511 5.14735C20.027 4.58372 19.299 4.25337 18.5296 4.23L5.66963 4.09C4.90028 4.11337 4.1723 4.44372 3.64813 5.00735C3.12395 5.57098 2.8472 6.32098 2.87963 7.09L2.87963 10.9C2.8472 11.669 3.12395 12.419 3.64813 12.9826C4.1723 13.5463 4.90028 13.8766 5.66962 13.9L6.87963 13.9C7.34355 13.9 7.71963 14.2761 7.71963 14.74C7.71963 15.2039 7.34355 15.58 6.87963 15.58Z" fill="white"/>
                                    </svg>

                                    <span class="displayFileName">ქავერის სურათის ატვირთვა</span>
                                </label>
                            </div>
                            
                    </div>
                </div>

                </div>

                <!-- ---------------<<<<<<<<<<<<<<<<< Custom Editions 1 <<<<<<<<<<<<<<<<<<<------------------- -->
            <style>
                .custom_editions {
                max-width: 544px;
                width: 100%;
            }
            .admin_nav_bar_bg {
                height: 2660px;
            }
            </style>

                <div class="pricing_default_editions_behavior">
                <span class="div_heading_spans">ფასები (custom edition)</span>

                <div class="inputs_for_default_pricing">
                <div class="custom_editions name_input_contact input">
                                <span>გამოცემის სახელწოდება</span>
                                <input name="productEdition" placeholder="შეიყვანეთ გამოცემის სახელწოდება..." type="text">
                        </div>
                    <div class="ps4_secondary_primary_pricing">
                        <div class="name_input_contact input">
                                <span>PS4 Secondary (₾)</span>
                                <input name="ps4SecondaryCstm" placeholder="შეიყვანეთ PS4 Secondary ფასი..." type="text">
                        </div>
                        <div class="name_input_contact input">
                                <span>PS4 Primary (₾)</span>
                                <input name="ps4PrimaryCstm" placeholder="შეიყვანეთ PS4 Primary ფასი..." type="text">
                        </div>
                    </div>

                    <div class="ps5_secondary_primary_pricing">
                        <div class="name_input_contact input">
                                    <span>PS5 Secondary (₾)</span>
                                    <input name="ps5SecondaryCstm" placeholder="შეიყვანეთ PS5 Secondary ფასი..." type="text">
                            </div>
                            <div class="name_input_contact input">
                                    <span>PS5 Primary (₾)</span>
                                    <input name="ps5PrimaryCstm" placeholder="შეიყვანეთ PS5 Primary ფასი..." type="text">
                        </div>
                    </div>


                </div>


            </div>

            <div class="upload_info_about_game">
                    <span class="div_heading_spans">რაოდენობა მარაგში</span>
                    <div class="game_name_publisher">
                        <div class="custom_editions name_input_contact input">
                            <span>პროდუქტის რაოდენობა</span>
                            <input name="productQuantity" placeholder="შეიყვანეთ რაოდენობა..." type="text">
                        </div>
                    </div>
            </div>

            <div class="upload_info_about_game">
                    <span class="div_heading_spans">ფასდაკლება</span>
                    <div class="game_name_publisher">
                        <div class="custom_editions name_input_contact input">
                            <span>ფასდაკლება (₾)</span>
                            <input name="productDiscount" placeholder="შეიყვანეთ ფასდაკლება ლარებში..." type="text">
                        </div>
                    </div>
            </div>


            <div class="lower__inputs">
            <span class="div_heading_spans">ლეგალური ინფორმაცია თამაშზე</span>
                    <span style="    color: #fff;
        position: absolute;
        font-size: 14px;
        color: #fff;
        font-family: CapsBook;
        padding: 12px;
        opacity: .3;">შეტყობინება</span>
                    <textarea required class="contact__message" name="productLeglinfo" id=""></textarea>
                </div>



                <div class="upload_info_about_game">
                    <span class="div_heading_spans">მეტი დეტალი</span>
                    <div class="game_name_publisher">
                        <div class="moreInfo_game_det">
                            <div class="custom_editions name_input_contact input">
                                <span>რელიზის თარიღი</span>
                                <input required name="productRelease" placeholder="02/24/2023..." type="text">
                            </div>

                            <div class="custom_editions name_input_contact input">
                                <span>გახმოვანება</span>
                                <input required name="productVoice" placeholder="შეიყვანეთ გახმოვანების ენები..." type="text">
                            </div>

                            <div class="custom_editions name_input_contact input">
                                <span>ტიტრები</span>
                                <input name="productTitles" placeholder="შეიყვანეთ ტიტრები..." type="text">
                            </div>

                            <div style="padding: 0px;" id="categorieDiv" class="sorting__div">
                                            <div style="max-width: 536px; border: 1px solid #ffffff1a; height: 24px;" id="ctgGenre" class="sorting_input">
                                                <span id="ctgDisplayValue">ყველა</span>
                                                <img id="ctgiInputImg" src="./icons/arrow up.svg" alt="">
                                            </div>
                                            <input type="radio" name="genre" value="action" id="action">
                                            <input type="radio" name="genre" value="rpg" id="rpg">
                                            <input type="radio" name="genre" value="shooter" id="shooter">
                                            <input type="radio" name="genre" value="sandbox" id="sandbox">
                                            <input type="radio" name="genre" value="survival" id="survival">
                                            <input type="radio" name="genre" value="horror" id="horror">
                                            <input type="radio" name="genre" value="sports" id="sports">
                                            <input type="radio" name="genre" value="racing" id="racing">
                                            <div style="width: 569px;" id="ctgFilterOptions" class="sorting_options_genre">
                                                <ul>
                                                    <li id="genreAll">ყველა</li>
                                                    <li id="genreAction"><label for="action">Action</label></li>
                                                    <li id="genreRPG"><label for="rpg">RPG</label></li>
                                                    <li id="genreShooter"><label for="shooter">Shooter</label></li>
                                                    <li id="genreSandbox"><label for="sandbox">Sand Box</label></li>
                                                    <li id="genreSurvival"><label for="survival">Survival</label></li>
                                                    <li id="genreHorror"><label for="horror">Horror</label></li>
                                                    <li id="genreSports"><label for="sports">Sports</label></li>
                                                    <li id="genreRacing"><label for="racing">Racing</label></li>

                                                </ul>
                                            </div>
                                    </div>
                        </div>
                    </div>
            </div>


            <div class="upload_info_about_game">
                    <span class="div_heading_spans">პრომოკოდი</span>
                    <div class="game_name_publisher">
                        <div class="moreInfo_game_det">
                            <div class="custom_editions name_input_contact input">
                                <span>პრომოკოდი კონკრეტული პროდუქტისთვის</span>
                                <input name="promocode" placeholder="შეიყვანეთ პრომოკოდი..." type="text">
                            </div>
                            <div class="custom_editions name_input_contact input">
                                <span>ფასდაკლება ლარებში</span>
                                <input name="promocodeDiscount" placeholder="რამდენი ლარი უნდა დააკლდეს პროდუქტს..." type="text">
                            </div>
            </div>
                    </div>

            <div class="submit_product_upload">
                <button name="uploadProduct" type="submit" style="    width: 100%;
    height: 60px;" class="btn btn_primary">ატვირთვა</button>
            </div>
                </aside>
        
            </form>
    </section>

    <script src="./admin.js"></script>
    <script src="./contact.js"></script>
    <script src="./products.js"></script>
</body>
</html>
<style>
    body {
        all: unset;
        background-color: #060514;
        
    }
    body::-webkit-scrollbar {
        width: 4px; /* width of the scrollbar */
    }
        body::-webkit-scrollbar-thumb {
        background: #6541F7; /* color of the thumb */
        border-radius: 50px; /* rounded corners */
    } 
</style>