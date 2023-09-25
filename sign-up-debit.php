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
</style>

<section class="add__cart__details_wrp">
    <section class="add__cart__detailes__cr">
            <div class="debit_card_details__bg">
                <span>ბარათის მონაცემები</span>
                <div class="debit_card_details_inputs">
                    <div class="card_number">
                        <label for="cardNumbers">ბარათის 16 ნიშნა კოდი</label>
                        <input type="text" id="cardNumbers" placeholder="1234 5678 9101">
                    </div>

                    <div class="expire_date">
                        <label for="cardDate">ბარათის ვადა</label>
                        <input type="text" id="cardDate" placeholder="12/24">
                    </div>

                    <div class="cvv/cvc">
                        <label for="cvvCvc">ბარათის CVV/CVC კოდი</label>
                        <input type="text" id="cvvCvc" placeholder="123">
                    </div>

                    <div class="cardHolder">
                        <label for="cardHolder">ბარათის მფლობელი</label>
                        <input type="text" id="cardHolder" placeholder="Nicolas Tesla">
                    </div>

                    <div class="submitBtn_card_details">
                        <button class="btn btn_primary">დამატება</button>
                    </div>
                </div>
            </div>
        </section>
</section>

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

               <div class="debit__cards__signup">
                        <div class="add__cart__on__account">
                            <div><img src="./icons/debit.svg" alt=""><span>ბარათის დამატება</span></div>
                        </div>

                        <div class="add__cart__on__account">
                            <div><img src="./icons/debit.svg" alt=""><span>ბარათის დამატება</span></div>
                        </div>

                        <div class="add__cart__on__account">
                            <div><img src="./icons/debit.svg" alt=""><span>ბარათის დამატება</span></div>
                        </div>

                        <div class="add__cart__on__account">
                            <div><img src="./icons/debit.svg" alt=""><span>ბარათის დამატება</span></div>
                        </div>
                    
               </div>

            
               <div class="sign__up__buttons">
                            <div class="signup_back_btn"><button style="color: #DCD3FF" class="btn btn_secondary"><a href="./sign-up-account.php">უკან</a></button></div>
                            <div class="signup_next_btn"><button class="btn btn_primary"><a href="">შემდეგი</a></button></div>
                        </div>

                        <div class="go__to__sign__in">
                            <span><a href="">გამოტოვება</a></span>
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