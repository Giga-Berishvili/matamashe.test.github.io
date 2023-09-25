<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./gameinstall.css">
    <title>Document</title>
</head>
<body>
   <section class="install__digital__game__container">
    <section class="install__digital__game__section">
            <div class="install__digital__game__header">
                <span>როგორ ჩავტვირთოთ ციფრული თამაში</span>
                <div class="install__digital__game__buttons">
                    <button class="installBtn" id="install_ps4">Playstation 4</button>
                    <button class="installBtn" id="install_ps5">Playstation 5</button>
                    <button class="installBtn" id="install_xb">Xbox </button>
                    <button class="installBtn" id="install_sw">Switch</button>
                </div>
            </div>

            <div id="tutorialsDisplay" class="install__digital__game__display__div installDefault">
                <div class="install__game__textarea">
                    <p id="steps" class="install__game__steps">ნაბიჯი 1</p>
                    <p id="tutorial" class="install__game__explain show">აირჩიეთ კონსოლი</p>

                </div>
                <div class="install__game__buttons">
                    <button id="previousPage" class="install__game__previous">დაბრუნება</button>
                    <button id="nextPage" class="install__game__next">შემდეგი</button>
                </div>
                <div class="install__game__page__counter"><p id="pageCounter">1/7</p></div>
            </div>
        </section>
   </section>
    <script src="./gameinstall.js"></script>
</body>
</html>
