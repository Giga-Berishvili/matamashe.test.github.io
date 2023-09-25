

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
        headerContainer.style.paddingLeft = '32px';
        headerContainer.style.paddingRight = '32px';
        headerContainer.style.paddingTop = '12px';
        headerContainer.style.paddingBottom = '12px';
        headerContainer.style.maxWidth = '567px';
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