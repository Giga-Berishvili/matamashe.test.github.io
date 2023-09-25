<?php include './header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./user-profile.css">
    <link rel="stylesheet" href="./sign-up.css">
    <link rel="stylesheet" href="./contact.css">
    <script src="./user-profile.js"></script>
    <script src="./contact.js"></script>
</head>
<body>


<style>
    .add__cart__detailes__cr {
        all: unset;
    }
    .debit_card_details__bg {
        all: unset;
        padding: 44px;
        background-color: #ebebeb05;
        border-radius: 14px;
        display: flex;
        flex-direction: column;
        gap: 44px;
        min-width: 400px;
        color: #fff;
    }
    #cardNumbers::placeholder, #cardDate::placeholder, #cvvCvc::placeholder, #cardHolder::placeholder {
        color: #fff;
    }
    .debit_card_details__bg input {
        color: #fff;
    }
    .add__new__card__details {
        width: 100%;
    }
    .add__cart__details_wrp {
        width: 100%;
    }
    .add__cart__detailes__cr {
        width: 100%;
    }

    @media screen and (max-width: 600px) {
    .debit_card_details__bg {
        all: unset;
        min-width: 10px;
    }
}
</style>

<!-- ---- >>>>>>>>>>>>>>>>>>>>>>>>> user settings sections <<<<<<<<<<<<<<<<<<<<<<<----- -->
<section id="changeAvatar" class="changeAvatar">
    <div class="avatarChangeBg">
        <img id="closeChangeAvatar" src="./icons/Close.svg" alt="">
        <div class="choose__image__for__account">
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

                        <div style="display: flex;
    max-width: 400px;
    justify-content: center;
    flex-wrap: wrap;" class="acc__img__labels">
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

                        <div style="display: flex; justify-content: center; padding: 12px 0px 0px 0px;">
                            <button style="color:#fff;" class="btn btn_secondary">შენახვა</button>
                        </div>
                    </div>
    </div>
</section>


<section id="changePassword" class="changePassword">
    <div class="avatarChangeBg changePassbg">
    <img id="closeChangePassword" style="position: absolute;
    left: 338px;
    top: 18px;
    cursor: pointer;" src="./icons/Close.svg" alt="">
        <div class="name_input_contact input">
            <span>ძველი პაროლი</span>
            <input placeholder="შეიყვანეთ ძველი პაროლი..." type="password">
        </div>
        <br>
        <div class="name_input_contact input">
            <span>ახალი პაროლი</span>
            <input placeholder="შეიყვანეთ პაროლი..." type="password">
        </div>

        <div class="name_input_contact input">
            <span>გაიმეორეთ პაროლი</span>
            <input placeholder="გაიმეორეთ პაროლი..." type="password">
        </div>

        <div class="name_change_btns">
            <button style="color: #fff" class="btn btn_secondary">პაროლის შეცვლა</button>
        </div>
    </div>
</section>


<section id="changeEmail" class="changeEmail">
    <div class="avatarChangeBg changePassbg">
    <img id="closeChangeEmail" style="position: absolute;
    left: 338px;
    top: 18px;
    cursor: pointer;" src="./icons/Close.svg" alt="">
        <div class="name_input_contact input">
            <span>პაროლი</span>
            <input placeholder="შეიყვანეთ პაროლი..." type="password">
        </div>
        <br>
        <div class="name_input_contact input">
            <span>ძველი მეილი</span>
            <input placeholder="შეიყვანეთ ძველი მეილი..." type="email">
        </div>

        <div class="name_input_contact input">
            <span>ახალი მეილი</span>
            <input placeholder="შეიყვანეთ მეილი..." type="email">
        </div>

        <div class="name_input_contact input">
            <span>გაიმეორეთ მეილი</span>
            <input placeholder="გაიმეორეთ მეილი..." type="email">
        </div>

        <div class="name_change_btns">
            <button style="color: #fff" class="btn btn_secondary">მეილის შეცვლა</button>
        </div>

    </div>
</section>


<section id="changeName" class="changeName">
    <div class="avatarChangeBg changePassbg">
    <img id="closeChangeName" style="position: absolute;
    left: 338px;
    top: 18px;
    cursor: pointer;" src="./icons/Close.svg" alt="">
        <div class="name_input_contact input">
            <span>პაროლი</span>
            <input placeholder="შეიყვანეთ ახალი სახელი..." type="password">
        </div>
        <div class="name_input_contact input">
            <span>ახალი სახელი</span>
            <input placeholder="შეიყვანეთ ახალი სახელი..." type="text">
        </div>
        <div class="name_change_btns">
            <button style="color: #fff" class="btn btn_secondary">პაროლის შეცვლა</button>
        </div>
    </div>
</section>





<section id="cardSettingsW" class="cardSettingsWrp">
    <section id="cardSettings" class="cardSettings">
        <div class="avatarChangeBg cardSettings">
            <img id="closeCardSettings" src="./icons/Close.svg" alt="">
        
            <aside class="added__card__settings">
                <span class="added__card__headline">დამატებული ბარათები</span>
                <div class="added__card__wrapper">
                    <div class="card__box">
                        <div class="card card_visa">
                            <span>VISA CARD</span>
                            <div class="card_details">
                                <h1>1******* 8910</h1>
                                <h2>14/24</h2>
                            </div>
                            <h3>GIGA BERISHVILI</h3>
                        </div>
                        <div class="edit_delete_card_buttons">
                            <button class="edit_card"><img src="./icons/edit pencil.svg" alt=""></button>
                            <button class="delete_card">წაშლა</button>
                        </div>
                    </div>

                    <div class="card__box">
                        <div class="card card_master">
                            <span>MASTER CARD</span>
                            <div class="card_details">
                                <h1>1******* 8910</h1>
                                <h2>14/24</h2>
                            </div>
                            <h3>GIGA BERISHVILI</h3>
                        </div>
                        <div class="edit_delete_card_buttons">
                            <button class="edit_card"><img src="./icons/edit pencil.svg" alt=""></button>
                            <button class="delete_card">წაშლა</button>
                        </div>
                    </div>



                    <div class="card__box">
                        <div class="card card_amex">
                            <span>AMERICAN EXPRESS</span>
                            <div class="card_details">
                                <h1>1******* 8910</h1>
                                <h2>14/24</h2>
                            </div>
                            <h3>GIGA BERISHVILI</h3>
                        </div>
                        <div class="edit_delete_card_buttons">
                            <button class="edit_card"><img src="./icons/edit pencil.svg" alt=""></button>
                            <button class="delete_card">წაშლა</button>
                        </div>
                    </div>
                </div>
            </aside>

            <aside class="add__new__card__details">
                <span class="add__new__card__headline">ახალი ბარათის დამატება</span>
                <section class="add__cart__details_wrp">
                            <section class="add__cart__detailes__cr">
                                    <div class="debit_card_details__bg">
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
            </aside>
        </div>
    </section>

</section>




<section id="walletSettings" class="walletSettings">
    <div class="avatarChangeBg walletSettingsBg">
    <img id="closeWalletSettings" style="position: absolute;
    left: 338px;
    top: 18px;
    cursor: pointer;" src="./icons/Close.svg" alt="">
    <div class="wallet__parameters">
        <aside class="wallet__ballance">
                <span class="wallet__headline">ბალანსი</span>
                <div class="balance_details">
                    <h1>1500.00₾</h1>
                    <h2>500.00$</h2>
                </div>
            </aside>

            <aside class="wallet__deposit">
                <span class="wallet__headline">ბალანსის შევსება</span>
                    <div class="name_input_contact input">
                        <span>თანხა (₾)</span>
                        <input placeholder="თანხა ლარებში..." type="text">
                    </div>
                    <div class="name_change_btns">
                        <button style="color: #fff" class="btn btn_primary">შევსება</button>
                    </div>
            </aside>

            <aside class="wallet__withdraw">
                <span class="wallet__headline">თანხის გატანა</span>
                    <div class="name_input_contact input">
                        <span>თანხა (₾)</span>
                        <input placeholder="თანხა ლარებში..." type="text">
                    </div>
                    <div class="name_input_contact input">
                        <span>ანგარიშის ნომერი</span>
                        <input placeholder="ბანკის ანგარიში..." type="text">
                    </div>
                        <div class="withdraw__labels">
                            <label for="">გატანის საკომისიო 2%</label>
                            <label for="">მინიმალური გასატანი თანხა 10.00₾</label>
                        </div>
                    <div class="name_change_btns">
                        <button style="color: #fff" class="btn btn_primary">შევსება</button>
                    </div>
            </aside>
    </div>
    </div>
</section>





<!-- ---- >>>>>>>>>>>>>>>>>>>>>>>>> user profile sections <<<<<<<<<<<<<<<<<<<<<<<----- -->
<section class="user__profile__main">
    <section class="user__profile__upper__side">
        <div class="profile__details">
                <img src="./content/rdr2 profile.png" alt="">
                <span>რეგისტრაციის თარიღი</span>
                <h1>9 აგვისტო, 2023 | 22:00</h1>
                <h2>1 წლის წინ</h2>
        </div>
    </section>

    <section class="user__profile__settings">

        <div class="user_setting" id="change__avatar">
            <img src="./icons/changeImage.svg" alt="">
            <span>სურათის შეცვლა</span>
        </div>

        <div class="user_setting" id="change__password">
            <img src="./icons/ChangePassword.svg" alt="">
            <span>პაროლის შეცვლა</span>
        </div>

        
        <div class="user_setting" id="change__email">
            <img src="./icons/changeEmail.svg" alt="">
            <span>მეილის შეცვლა</span>
        </div>
        
        <div class="user_setting" id="change__name">
            <img src="./icons/changeName.svg" alt="">
            <span>სახელის შეცვლა</span>
        </div>
        
        <div class="user_setting" id="card__settings">
            <img src="./icons/cardSettings.svg" alt="">
            <span>ბარათების მართვა</span>
        </div>
        
        <div class="user_setting" id="wallet__settings">
            <img src="./icons/walletSettings.svg" alt="">
            <span>საფულის მართვა</span>
        </div>

    </section>

    <section class="user__transactions__main">
                <div class="transactions__table__container">
                        <table class="user__transactions__table">
                            <span class="transaction__heading_span">ტრანზაქციები</span>
                            <thead>
                                <tr>
                                    <th class="productName">პროდუქტის სახელი</th>
                                    <th class="productCategorie">კატეგორია</th>
                                    <th class="productVersion">ვერსია</th>
                                    <th class="productOrderNumber">შეკვეთის ნომერი</th>
                                    <th class="productID">პროდუქტის ID</th>
                                    <th class="productDate">თარიღი</th>
                                    <th class="productStatus">სტატუსი</th>
                                    <th class="productTotale">ჯამში</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add your data rows here -->
                                <tr>
                                    <td class="productName">>NBA 2K24 Black Mamba Edition</td>
                                    <td class="productCategorie">PS4</td>
                                    <td class="productVersion">Primary</td>
                                    <td class="productOrderNumber">#128312</td>
                                    <td class="productID">ID 200</td>
                                    <td class="productDate">9/20/2023 | 12:00</td>
                                    <td class="productStatus"><div class="status_label problem">უარყოფილი</div></td>
                                    <td class="productTotale">1242.29₾</td>
                                    <td class="openDetailsTableRow"><img src="./icons/link.svg" alt=""></td>
                                </tr>
                                
                                <tr>
                                    <td class="productName">>NBA 2K24 Black Mamba Edition</td>
                                    <td class="productCategorie">PS4</td>
                                    <td class="productVersion">Primary</td>
                                    <td class="productOrderNumber">#128312</td>
                                    <td class="productID">ID 200</td>
                                    <td class="productDate">9/20/2023 | 12:00</td>
                                    <td class="productStatus"><div class="status_label pending">უარყოფილი</div></td>
                                    <td class="productTotale">1242.29₾</td>
                                    <td class="openDetailsTableRow"><img src="./icons/link.svg" alt=""></td>
                                </tr>

                                <tr>
                                    <td class="productName">>NBA 2K24 Black Mamba Edition</td>
                                    <td class="productCategorie">PS4</td>
                                    <td class="productVersion">Primary</td>
                                    <td class="productOrderNumber">#128312</td>
                                    <td class="productID">ID 200</td>
                                    <td class="productDate">9/20/2023 | 12:00</td>
                                    <td class="productStatus"><div class="status_label success">უარყოფილი</div></td>
                                    <td class="productTotale">1242.29₾</td>
                                    <td class="openDetailsTableRow"><img src="./icons/link.svg" alt=""></td>
                                </tr>
                                
                                <!-- Add more rows as needed -->
                            </tbody>
                    </table>
                </div>
    </section>
</section>

    
</body>
</html>
<?php include './footer.php' ?>
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