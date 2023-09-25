<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/fonts.css">
    <link rel="stylesheet" href="/components/main.css">

    <title></title>
</head>
<body>
    <section class="main_page_container">
        <div class="vector_for_img"><img src="./content/Vector 1.svg" alt=""></div>
        <aside class="main_page_container_left_aside">
            <div class="main_page_text_content">
                <div>
                    <span>"მათამაშე"</span>
                    <div><img src="./content/underline.svg" alt=""></div>
                </div>
                <p>ციფრული ვიდეო თამაშების ონლაინ მაღაზია,
                    ყველაზე დიდი არჩევანი საქართველოში! 500 ზე მეტი
                    ციფრული პროდუქტი ერთ სივრცეში, ონლაინ გადახდა
                    მყისიერი პროდუქტის მიწოდება.</p>
            </div>

            <div class="main_page_buttons">
                <button class="btn btn_primary cst"><a href="">ციფრული თამაშები<img src="./content/Arrow-Right-colored.svg" alt=""></a></button>
                <button class="btn btn_secondary"><a href="">ჩვენ შესახებ</a></button>
            </div>
        </aside>

        <aside class="main_page_container_right_aside">
            <img src="./content/controllers.svg" alt="">
        </aside>
    </section>

    <?php include './populargenres.php' ?>
    <?php include './gameinstall.php' ?>
    <?php include './pregames.php' ?>
    <?php include './populargames.php' ?>
    <?php include './social.php' ?>
    <?php include './footer.php' ?>
</body>
</html>