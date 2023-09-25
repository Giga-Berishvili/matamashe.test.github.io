<?php include './header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign-up.css">
    <link rel="stylesheet" href="./contact.css">
    <title>Document</title>
</head>
<body>
<style>
    .progress__line__over {
        animation-name: progressBar;
        animation-duration: 2s;
        transition: all 2s cubic-bezier(0.215, 0.610, 0.355, 1);
        border: 1px solid #6541F7;
        max-width: 100%;
        margin-top: -2px;
    }
    @keyframes progressBar {
        from {
            width: 50%;
        }
        to {
            width: 100%;
        }
    }
    .progress__pont2 div{
        animation-name: progressPoint;
        animation-duration: 3s;
        transition: none;
        background-color: #6541F7;
        animation-delay: 1s;
        animation-iteration-count:inherit;
    }
    .progress__pont3 div{
        animation-name: progressPoint;
        animation-duration: 3s;
        transition: none;
        background-color: #6541F7;
        animation-delay: 1s;
        animation-iteration-count:inherit;
    }
    .sign__up__buttons {
        justify-content: center;
        gap: 44px;
        padding-top: 44px;
    }
    .go__to__sign__in span {
        display: flex;
        flex-direction: column;
    }
    .sign__up__header p{
        max-width: 770px;
        color: #fff;
        font-family: Book;
        font-size: 18px;
        text-align: center;
        margin: 0px;
        padding-top: 4px;
        opacity: .7;
    }
    .sign__up__main__bg {
        height: 550px;
    }
</style>


    <section class="sign__up__main__section">

        <div class="sign__up__main__bg">

            <div class="sign__up__header">
                <span>ვერიფიკაცია</span>
                <p>გილოცავთ! თქვენ წარმატებით გაიარეთ რეგისტრაცია Matamashe.ge ზე. შეამოწმეთ ელ.ფოსტაზე მოსული კოდი დაშეიყვანეთ დაბლა მოცემულ ველში</p>
            </div>


            <div class="verify__code__input__section">
                <div class="verify__code__input"><input type="number" name="" id="verifyCode"></div>
                <div class="verify__code__label"><label for="verifyCode">შეიყვანეთ 6 ნიშნა კოდი</label></div>

                <div class="verify__buttons">
                    <button style="color: #DCD3FF;" class="btn btn_secondary">ახალი კოდი</button>
                    <button class="btn btn_primary">ვერიფიკაცია</button>
                </div>
            </div>


    </section>


    <script src="./contact.js"></script>
    <script src="./signup.js"></script>
</body>
</html>
<?php include './footer.php' ?>
<style>
    footer {
        margin-top: 0px;
    }
</style>