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
        max-width: 50%;
        margin-top: -2px;
    }
    @keyframes progressBar {
        from {
            width: 0%;
        }
        to {
            width: 50%;
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
                            <span>ანგარიშის სახელი</span>
                            <input placeholder="შეიყვანეთ ანგარიშის სახელი..." type="email">
                        </div>

                        <div class="name_input_contact input">
                            <span>პაროლი</span>
                            <input placeholder="შეიყვანეთ პაროლი..." type="password">
                        </div>

                        <div class="name_input_contact input">
                            <span>გაიმეორეთ პაროლი</span>
                            <input placeholder="შეიყვანეთ პაროლი..." type="text">
                        </div>

                        
                        <div class="sign__up__buttons">
                            <div class="signup_back_btn"><button style="color: #DCD3FF" class="btn btn_secondary"><a href="./sign-up-personal.php">უკან</a></button></div>
                            <div class="signup_next_btn"><button class="btn btn_primary"><a href="./sign-up-debit.php">შემდეგი</a></button></div>
                        </div>

                        <div class="go__to__sign__in">
                            <span>უკვე გაქვთ ანგარიში? გაიარეთ <a href="">ავტორიზაცია</a></span>
                        </div>

                </div>

                <hr class="line_to_choose_img__acc">

                <div class="choose__image__for__account">
                    <span class="choose__image__for__account__span">აირჩიეთ სურათი ანგარიშისთვის</span>
                    <div class="acc__img__inputs">
                        <input name="profileImg" id="profileimg1" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg2" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg3" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg4" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg5" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg6" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg7" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg8" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg9" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg10" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg11" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg12" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg13" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg14" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg15" type="radio" value="./content/rdr2 profile.png">
                        <input name="profileImg" id="profileimg16" type="radio" value="./content/rdr2 profile.png">
                    </div>

                    <div class="acc__img__labels">
                        <label for="profileimg1"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg2"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg3"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg4"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg5"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg6"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg7"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg8"> <img  class="profileimg"src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg9"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg10"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg11"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg12"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg13"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg14"> <img class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg15"> <img  class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                        <label for="profileimg16"> <img  class="profileimg" src="./content/rdr2 profile.png" alt=""></label>
                    </div>
                </div>
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