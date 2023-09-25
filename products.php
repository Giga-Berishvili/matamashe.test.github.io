<?php include './header.php';
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./products.css">
    <title>Document</title>
</head>
<body>
    <section class="products_main_section_adjust">


            <section class="products__main__section">
                <secction class="products__sorting">
                    <div class="sorting__div">
                        <label class="sorting_inputLabel" for="sorting_input">სორტირება</label>
                            <div id="sortingInput" class="sorting_input">
                                <span id="sortDisplayValue">ახალი დამატებული</span>
                                <img id="inputImg" src="./icons/arrow up.svg" alt="">
                            </div>

                            <div id="sortingOptions" class="sorting_options">
                                <input name="sortOptions" type="radio" value="priceLowToHigh" id="lowtohigh">
                                <input name="sortOptions" type="radio" value="priceHighToLow" id="hightolow">
                                <input name="sortOptions" type="radio" value="mostSold" id="mostsold">
                                <input checked name="sortOptions" type="radio" value="recentlyAdded" id="newadded">
                                <ul>
                                    <li id="priceLowToHigh"><label for="lowtohigh">ფასი დაბლიდან მაღლა</label></li>
                                    <li id="priceHighToLow"><label for="hightolow">ფასი მაღლიდან დაბლა</label></li>
                                    <li id="mostSold"><label for="mostsold">ხშირად გაყიდვადი</label></li>
                                    <li id="recentlyAdded"><label for="newadded">ახალი დამატებული</label></li>
                                </ul>
                            </div>
                    </div>
                    <div id="showFilteringDataMenu" class="filter__img"><img src="./icons/filter.svg" alt=""></div>
                </secction>

                <section class="products__main">
                    <section id="dataFilterMenu" class="products__filtering">
                        <div class="filter__data__bg">
                                    <div class="filter_data_header">
                                        <span>ფილტრი</span>
                                        <hr>
                                    </div>
                                    <div class="filter__data__inputs">
                                            <div class="pric_filter">

                                            <span>ფასი</span>
                                            <div><input type="number" placeholder="0₾-დან" name="pricefrom"><input name="priceto" type="number" name="" placeholder="9999₾-მდე"></div>

                                            </div>

                                                            <div id="categorieDiv" class="sorting__div">
                                        <label class="sorting_inputLabel" for="sorting_input">კატეგორია</label>
                                            <div id="filterGenre" class="sorting_input">
                                                <span id="genreDisplayValue">ყველა</span>
                                                <img id="filteriInputImg" src="./icons/arrow up.svg" alt="">
                                            </div>

                                            <div id="genreFilterOptions" class="sorting_options_genre">
                                                <ul>
                                                    <li id="categorieAll">ყველა</li>
                                                    <li id="categoriePs4">Playstation 4</li>
                                                    <li id="categoriePs5">Playstation 5</li>
                                                    <li id="categorieXbox">Xbox</li>
                                                    <li id="categorieSwitch">Switch</li>
                                                </ul>
                                            </div>
                                    </div>


                                            <div id="categorieDiv" class="sorting__div">
                                        <label class="sorting_inputLabel" for="sorting_input">ჟანრი</label>
                                            <div id="ctgGenre" class="sorting_input">
                                                <span id="ctgDisplayValue">ყველა</span>
                                                <img id="ctgiInputImg" src="./icons/arrow up.svg" alt="">
                                            </div>

                                            <div id="ctgFilterOptions" class="sorting_options_genre">
                                                <ul>
                                                    <li id="genreAll">ყველა</li>
                                                    <li id="genreAction">Action</li>
                                                    <li id="genreRPG">RPG</li>
                                                    <li id="genreShooter">Shooter</li>
                                                    <li id="genreSandbox">Sand Box</li>
                                                    <li id="genreSurvival">Survival</li>
                                                    <li id="genreHorror">Horror</li>
                                                    <li id="genreSports">Sports</li>
                                                    <li id="genreRacing">Racing</li>

                                                </ul>
                                            </div>
                                    </div>


                                    <div class="preorder_filter">

                                            <span>ხელმისაწვდომია</span>
                                            <div class="preorder_radios">

                                            <div> <input type="radio" name="preorder" id="allPre" class="allPre"> <label for="allPre"> ყველა </label> </div>
                                                <div> <input type="radio" name="preorder" id="preorder" class="preorder"> <label for="preorder"> წინასწარი შეკვეთით </label> </div>
                                                <div><input type="radio" name="preorder" id="availableNow" class="availableNow"> <label for="availableNow"> ახლავე </label> </div>
                                            </div>

                                    </div>
            

                                </div>
                            </div>
                    </section>

                    <section id="productsList" class="products__list">
                            <?php
                           
                             include 'Pbox-m.php' ?>
                            <?php  
                            
                            if($_GET['categorie'] == 'ps4') {
                                ?> 
                                <script>
                                const ps4Boxes = document.querySelectorAll('.popular__games__box_m');
                                ps4Boxes.forEach(pBox => {
                                    const ctgs = pBox.querySelector('.categorie');
                                    if(ctgs.textContent != 'PS4') {
                                        pBox.style.display = 'none';
                                    }
                                });
                            </script>
                                <?php
                            }elseif($_GET['categorie'] == 'ps5') {
                                ?> 
                                <script>
                                const ps5Boxes = document.querySelectorAll('.popular__games__box_m');
                                ps5Boxes.forEach(pBox => {
                                    const ctgs = pBox.querySelector('.categorie');
                                    if(ctgs.textContent != 'PS5') {
                                        pBox.style.display = 'none';
                                    }
                                });
                            </script>
                                <?php
                            }else {

                            }
                            
                            ?>
                    </section>

                </section>
            </section>


        
    </section>

    <script src="./products.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                // Add an event listener for radio button changes
                $('input[name="sortOptions"]').change(function () {
                    const selectedOption = $('input[name="sortOptions"]:checked').val();

                    // Perform AJAX request based on the selected option
                    $.ajax({
                        type: "POST",
                        url: "Pbox-m.php", // Replace with the actual PHP file
                        data: { option: selectedOption },
                        success: function (data) {
                            // Update the games list with the received data
                            $('#productsList').html(data);
                        },
                        error: function () {
                            console.log("AJAX request failed");
                        }
                    });
                });
            });
        </script>

</body>
</html>
<?php include './footer.php' ?>

