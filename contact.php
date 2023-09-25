<?php include './header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./contact.css">
</head>
<body>
    <section class="contact__box__container">
        <div class="contact__box__bg">
            <div class="cotact__box__header">
                <span>დაგვიკავშირდით</span>
                <img src="./content/underline purple.svg" alt="">
            </div>
            <div class="inputs__container__contact">
                <div class="upper__inputs">
                    <div class="name_input_contact input">
                        <span>სახელი</span>
                        <input placeholder="შეიყვანეთ სახელი..." type="text">
                    </div>
                    <div class="name_input_contact input">
                        <span>ელ.ფოსტა</span>
                        <input placeholder="შეიყვანეთ სახელი..." type="text">
                    </div>
                </div>
                <div class="lower__inputs">
                    <span style="    color: #fff;
        position: absolute;
        font-size: 14px;
        color: #fff;
        font-family: CapsBook;
        padding: 12px;
        opacity: .3;">შეტყობინება</span>
                    <textarea class="contact__message" name="" id=""></textarea>
                </div>
                <div class="send_contact"><button type="submit" class="btn btn_primary">გაგზავნა</button></div>
            </div>
        </div>
    </section>

    <script src="./contact.js"></script>
</body>
</html>
<?php include './footer.php' ?>