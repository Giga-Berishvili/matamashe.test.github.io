<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matamashe.ge</title>
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="./icons/Logo-s.svg">
</head>
<body>

    <div id="scrollUpBtn" class="scroll__up__main__div">
        <div class="scroll__up__light_bg">
            <div class="scroll__up_bg">
                <img src="./icons/scroll up.svg" alt="">
            </div>
        </div>
        <div>
            <span>მაღლა</span>
        </div>
    </div>

    <section id="headerSection" class="header__container">
    <header id="headerContainer">
        <div class="header__logo">
            <a href="./index.php"><img src="./icons/Logo-s.svg" alt=""></a>
        </div>

        <div id="navigationMenu">
            <ul>
                <li class="home"><a class="active" href="./index.php">მთავარი</a></li>
                <li class="games"><a aria-disabled="" href="#" id="headerCategories">ციფრული თამაშები
                    <div class="header__categories" id="menuCategories">
                        <hr>
                        <a href="./products.php?categorie=all">ყველა</a>
                        <a href="./products.php?categorie=ps4">Playstation 4</a>
                        <a href="./products.php?categorie=ps5">Playstation 5</a>
                        <!-- <a href="./products.php?categorie=xbox">Xbox</a>
                        <a href="./products.php?categorie=switch">Switch</a>
                        <a href="./products.php?categorie=psn card">PSN Cards</a> -->

                    </div>
                </li>
                <li class="contact"><a href="./contact.php">კონტაქტი</a></li>
                <li class="faq"><a href="./faq.php">კითხვები</a></li>
            </ul>
        </div>

       <div class="header__right__side">

            <div class="features__container">
                    <div class="search_container">
                        <form class="search_form" action="">
                            <img src="./icons/Magnifier.svg" alt="">
                            <input placeholder="ძიება..." class="src" type="text" name="" id="">
                        </form>
                            
                        
                    </div>

                    <div class="features">
                            <div class="cart__counter">0</div>
                            <div><img src="./icons/cart.svg" alt=""></div>
                    </div>
            </div>


            <!-- Not Registered User -->

                <!-- <div class="user__side">
                    <div><button class="btn btn_secondary"><a href="">ავტორიზაცია</a></button></div>
                    <div><button class="btn btn_primary"><a href="">რეგისტრაცია</a></button></div>
                </div> -->

                <section id="mobileNavMenuContainer">
                <div id="showMobileNav"><img src="./icons/burgermenu.svg" alt=""></div>
                    <div id="mobileNav" class="burger__menu">
    
                            <div>
                                <div id="hideMobileNav" class="close__mobile__nav"><img src="./icons/Close.svg" alt=""></div>

                                <!-- <div class="user__side mobile_user_side" >
                                    <div><button class="btn btn_secondary"><a href="">ავტორიზაცია</a></button></div>
                                    <div><button class="btn btn_primary"><a href="">რეგისტრაცია</a></button></div>
                                </div> -->

                                <div id="profileSettings" class="user__features user__features_mobile">
                        <div class="user__details"> 
                            <div>
                                <img src="./content/profile img.png" alt="">
                            </div>

                            <div class="user__name__email">
                                <span>Berishvili Giga</span>
                                <p>test@gmail.com</p>
                            </div>

                        </div>
                    </div>

                        <div class="features__container mobile_features__container">
                        <div class="search_container mobile_search_container">
                            <form class="search_form mobile_search_form" action="">
                                <img src="./icons/Magnifier.svg" alt="">
                                <input placeholder="ძიება..." class="src" type="text" name="" id="">
                            </form>
                                
                            
                        </div>

                        <div class="features">
                                <div class="cart__counter">0</div>
                                <div><img src="./icons/cart.svg" alt=""></div>
                        </div>
                </div>

                                            <div class="mobile__nav">
                                <ul>
                                    <li class=""><a class="active" href="./index.php">მთავარი</a></li>
                                    <li class=""><a aria-disabled="" href="#" id="headerCategories">ციფრული თამაშები
                                        <div class="header__categories" id="menuCategories">
                                            <hr>
                                            <a href="./products.php?categorie=all">ყველა</a>
                                            <a href="./products.php?categorie=ps4">Playstation 4</a>
                                            <a href="./products.php?categorie=ps5">Playstation 5</a>
                                            <!-- <a href="">Xbox</a>
                                            <a href="">Switch</a>
                                            <a href="">PSN Cards</a> -->

                                        </div>
                                    </li>

                                    <li class=""><a href="./contact.php">კონტაქტი</a></li>
                                    <li class=""><a href="./faq.php">კითხვები</a></li>
                                </ul>
                            </div>


                            </div>
                    </div>
                </section>

                
                <!-- Registered User -->

                <div class="user__signed">
                    <div id="showProfile" class="user__profile__image"><img src="./content/profile img.png" alt=""></div>

                    <div id="usermenu" class="user__features">
                        <div class="user__details"> 
                            <div>
                                <img src="./content/profile img.png" alt="">
                            </div>

                            <div class="user__name__email">
                                <span>Berishvili Giga</span>
                                <p>test@gmail.com</p>
                            </div>

                        </div>
                        <hr>

                        <div class="user_settings">
                            <ul>
                                <li><a href=""><img src="./icons/settings.svg" alt="">პარამეტრები</a></li>
                                <li><a href=""><img src="./icons/transactions.svg" alt="">ტრანზაქციები</a></li>                         
                                <li><a href=""><img src="./icons/wallet.svg" alt="">საფულე</a></li>
                                <li><a href=""><img src="./icons/notifications.svg" alt="">შეტყობინებები</a></li>
                                <li><a href=""><img src="./icons/sign-out.svg" alt="">გამოსვლა</a></li>
                            </ul>
                        </div>

                    </div>

                </div>




       </div>
    </header>
    </section>
    <script>
        // || user profile opener

const showProfile = document.getElementById('showProfile');
const usermenu = document.getElementById('usermenu');

showProfile.addEventListener('click', () => {
    usermenu.classList.toggle('usershow');
});



// || moible Nav
const showMobileNav = document.getElementById('showMobileNav');
const mobileNav = document.getElementById('mobileNav');
const hideMobileNav = document.getElementById('hideMobileNav');

showMobileNav.addEventListener('click', () => {
    mobileNav.style.display = 'block';
});
hideMobileNav.addEventListener('click', () => {
    mobileNav.style.display = 'none';
});



// || menu categories
const headerCategories = document.getElementById('headerCategories');
const menuCategories = document.getElementById('menuCategories');

headerCategories.addEventListener('click', () => {
    if (menuCategories.style.display === 'flex') {
        menuCategories.style.display = 'none';
    } else {
        menuCategories.style.display = 'flex';
    }
});

// || navigation onclick

const menuItems = document.querySelectorAll('li a');
const Categories = document.getElementById('headerCategories');
const menu = document.getElementById('menuCategories');

menuItems.forEach((menuItem) => {
    menuItem.addEventListener('click', () => {
        // Remove the "active" class from all menu items
        menuItems.forEach((item) => {
            item.classList.remove('active');
        });

        // Add the "active" class to the clicked menu item
        menuItem.classList.add('active');

        // Toggle the visibility of the menuCategories when headerCategories is clicked
        if (menuItem === headerCategories.parentElement) {
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }
    });
});


// || header fix on scroll

const headerContainer = document.getElementById('headerContainer');
const headerHeight = headerContainer.clientHeight;
const headerSection = document.getElementById('headerSection');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 100) {
        headerContainer.style.position = 'fixed';
        headerContainer.style.background = '#03020C';
        headerContainer.style.maxWidth = '1860px';
        headerContainer.style.paddingLeft = '32px';
        headerContainer.style.paddingRight = '32px';
        headerContainer.style.paddingTop = '12px';
        headerContainer.style.paddingBottom = '12px';
    } else {
        headerContainer.style.position = 'static';
        headerContainer.style.background = '#ffffff00';
        headerContainer.style.maxWidth = '1520px';
        headerContainer.style.paddingLeft = '0';
        headerContainer.style.paddingRight = '0';
        headerContainer.style.paddingTop = '32px';
        headerContainer.style.paddingBottom = '0';
    }
});





document.getElementById('headerCategories').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of the link
    // Add your code here to handle the click event without page reload
});

// || scroll up

const scrollUpBtn = document.getElementById('scrollUpBtn');

window.addEventListener("scroll", () => {
            const scrollY = window.scrollY;

            // Adjust this value to your desired scroll position
            if (scrollY >= 500) {
                scrollUpBtn.style.display = "flex";
            } else {
                scrollUpBtn.style.display = "none";
            }
        });

scrollUpBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // Optional smooth scrolling
    });
});

    </script>
    
</body>
</html>