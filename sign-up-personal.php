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

    .sign__up__buttons {
        justify-content: center;
        display: flex;
    }
</style>
    <section class="sign__up__main__section">

        <div class="sign__up__main__bg">

            <div class="sign__up__header">
                <span>რეგისტრაცია</span>
                <img src="./content/underline colorised.svg" alt="">
            </div>

           <div class="sign__up__progress__bar_cont">
                <div class="sign__up__progress__bar">
                        <div class="progress__bar__points">
                            <div class="progress__pont1"><div><span>პირადი ინფორმაცია</span></div></div>
                            <div class="progress__pont2"><div><span>ანგარიშის ინფორმაცია</span></div></div>
                            <div class="progress__pont3"><div><span>ბარათის დამატება <p class="optional">(ნებაყოფლობით)</p></span></div></div>
                        </div>
                        <div class="progreess__bar__lies">
                            <hr class="progress__line__over">
                            <hr class="progress__line__under">
                        </div>
                    </div>
            </div>
            
           <div class="signup__form__section">
            <div class="sign__up__first__inputs">
                        <div class="name_input_contact input">
                            <span>ელ.ფოსტა</span>
                            <input placeholder="შეიყვანეთ ელ.ფოსტა..." type="email">
                        </div>

                        <div class="name_input_contact input">
                            <span>მობილური</span>
                            <input placeholder="შეიყვანეთ მობილური..." type="text">
                        </div>

                        <div class="name_input_contact input">
                            <span>სახელი</span>
                            <input placeholder="შეიყვანეთ სახელი..." type="text">
                        </div>

                        <div class="name_input_contact input">
                            <span>გვარი</span>
                            <input placeholder="შეიყვანეთ გვარი..." type="text">
                        </div>
                        
                        <div class="sign__up__buttons">
                            <div class="signup_next_btn"><button class="btn btn_primary"><a href="./sign-up-account.php">შემდეგი</a></button></div>
                        </div>

                        <div class="go__to__sign__in">
                            <span>უკვე გაქვთ ანგარიში? გაიარეთ <a href="">ავტორიზაცია</a></span>
                        </div>
                </div>
           </div>

        </div>


    </section>

    <script src="./contact.js"></script>
</body>
</html>
<?php include './footer.php' ?>
<style>
    footer {
        margin-top: 0px;
    }
</style>