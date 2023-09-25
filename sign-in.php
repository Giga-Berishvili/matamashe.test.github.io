<?php include './header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign-in.css">
    <link rel="stylesheet" href="./contact.css">
    <title>Document</title>
</head>
<body>

    <section class="sign__in__main__section">
        <div class="sign__in__bg">
            <div class="signin__hedder">
                <span class="signin__headline">ავტორიზაცია</span>
                <img class="signin__headline__underline" src="./content/underline colorised.svg" alt="">
            </div>

            <div class="sign__in__inputs">
                    <div class="name_input_contact input">
                        <span>ელ.ფოსტა</span>
                        <input placeholder="შეიყვანეთ ელ.ფოსტა..." type="text">
                    </div>
                    
                    <div class="name_input_contact input">
                        <span>პაროლი</span>
                        <input placeholder="შეიყვანეთ პაროლი..." type="password">
                    </div>

                    <div class="submit__signin__btn">
                        <button class="btn btn_primary">ავტორიზაცია</button>
                    </div>

                    <div class="recover__account__btn">
                        <button><a href="">პაროლის აღდგენა</a></button>
                    </div>
            </div>
        
        </div>
    </section>

    <section class="go__signup__page">
        <span>არ გაქვთ ანგარიში? გაიარეთ<a href="">რეგისტრაცია</a></span>
    </section>

    <script src="./contact.js"></script>
</body>
</html>