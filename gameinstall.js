document.addEventListener('DOMContentLoaded', function() {
    const display = document.getElementById('tutorialsDisplay');
    let currentPage = 1;
    const totalPages = 7;
    const next = document.getElementById('nextPage');
    const previous = document.getElementById('previousPage');
    const installButtons = document.querySelectorAll('.installBtn');

// Add click event listeners to each button
installButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove the activeInstallBtn class from all buttons
        installButtons.forEach(btn => {
            btn.classList.remove('activeInstallBtn');
        });

        // Add the activeInstallBtn class to the clicked button
        button.classList.add('activeInstallBtn');

        // Add the id value as a class to the display element
        display.className = 'install__digital__game__display__div ' + button.id;

        if(display.classList.contains('install_ps4')) {
            steps = [
                "", // Index 0, no tutorial message for the first page
                "დააჭირეთ ღილაკს “PS” თქვენი კონსოლის კონტროლერზე (კონტროლერის ცენტრში მრგვალი ღლაკი Playstation ის ლოგოთი)",
                "PS ღილაკზე დაჭერის შემდეგ გაიხსნება მთავარი მენიუ და აირჩიეთ 'Power'",
                "შემდეგ აირჩიეთ 'Switch User'",
                "შემდეგ აირჩიეთ 'New User'",
                "შემდეგ აირჩიეთ 'Create User'",
                "შემდეგ გამოჩნდება ორი ველი ელ.ფოსტის და პაროლის შესაყვანად. 'Sign-In ID' ში შეიყვანეთ ის ელ.ფოსტა რომელიც პროდუქტის შეძენისას მიიღეთ ხოლო 'Password' ში შეიყვანეთ ის პაროლი რომელიც ჩვენ გამოგიგზავნეთ პროდუქტის ელ.ფოსტასთან ერთად.",
                "ანგარიში გააქტირებულია! ახლა გადადით 'Library'-ში და 'Purchased' განყოფილებიდან გადმოტვირთეთ თამაში რომელიც შეიძინეთ"
            ];
        }else if(display.classList.contains('install_ps5')) {
            steps = [
                "", // Index 0, no tutorial message for the first page
                "დააჭირეთ ღილაკს “PS” თქვენი კონსოლის კონტროლერზე (კონტროლერის ცენტრში მრგვალი ღლაკი Playstation ის ლოგოთი)",
                "სამართავი მენიუდან აირჩიეთ 'Switch User'",
                "შემდეგ აირჩიეთ 'New User'",
                "შემდეგ აირჩიეთ 'Get Started'(არ აირჩიოთ 'Play as a One-Time Guest')!!!",
                "შემდეგ გამოჩნდება ორი ველი ელ.ფოსტის და პაროლის შესაყვანად. 'Sign-In ID' ში შეიყვანეთ ის ელ.ფოსტა რომელიც პროდუქტის შეძენისას მიიღეთ ხოლო 'Password' ში შეიყვანეთ ის პაროლი რომელიც ჩვენ გამოგიგზავნეთ პროდუქტის ელ.ფოსტასთან ერთად.",
                "შემდეგ დააჭირეთ 'Sign in' და არა 'Skip and Play Offline'",
                "ანგარიში გააქტირებულია! ახლა გადადით 'Game Library'-ში და 'Your Collection' განყოფილებიდან გადმოტვირთეთ თამაში რომელიც შეიძინეთ"
            ];
        }else if(display.classList.contains('install_xb')) {
            steps = [
                "", // Index 0, no tutorial message for the first page
                "მთავარი მენიუდან გადადით 'Profile & System' განყოფილებაში",
                "აირჩიეთ 'Add or switch'",
                "შემდეგ აირჩიეთ 'Add new' და არა 'Add guest'",
                "შემდეგ შეიყვანეთ 'Email, phone or Skype' ველში რომელიც ჩვენ გამოგიგზავნეთ",
                "შემდეგ შეიყვანეთ პაროლი 'Your password' ველში რომელიც ჩვენ გამოგიგზავნეთ",
                "შემდეგ აირჩიეთ 'No barriers' და შემდეგ 'Skip this'",
                "ანგარიში გააქტირებულია! ახლა გადადით მთავარ მენიუში და 'My games % apps' განყოფილებიდან აირჩიეთ 'See all' და გადმოტვირთეთ თამაში რომელიც შეიძინეთ"
            ];
        }else if(display.classList.contains('install_sw')) {
            steps = [
                "", // Index 0, no tutorial message for the first page
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
                "განყოფილება მალე დაემატება",
            ];
        }
        
        document.getElementById('tutorial').textContent = steps[currentPage];

    });



});

    next.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage += 1;
                    document.getElementById('pageCounter').textContent = `${currentPage}/${totalPages}`;
                    document.getElementById('steps').textContent = `ნაბიჯი ${currentPage}`;
                    document.getElementById('tutorial').textContent = steps[currentPage];
        
                }
            })

    previous.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage -= 1;
                    document.getElementById('pageCounter').textContent = `${currentPage}/${totalPages}`;
                    document.getElementById('steps').textContent = `ნაბიჯი ${currentPage}`;
                    document.getElementById('tutorial').textContent = steps[currentPage];
        
                }
            })

});

























// // page changer <<------------
// document.addEventListener('DOMContentLoaded', function () {
//     const nextPage = document.getElementById('nextPage');
//     const previousPage = document.getElementById('previousPage');
//     const pages = 7;
//     let currentPage = 1;
//     let steps = [""];

    


//     if(document.getElementById('tutorialsDisplay').classList.contains('install_ps4')) {
//         steps = [
//             "", // Index 0, no tutorial message for the first page
//             "დააჭირეთ ღილაკს “PS” თქვენი კონსოლის კონტროლერზე (კონტროლერის ცენტრში მრგვალი ღლაკი Playstation ის ლოგოთი)",
//             "PS ღილაკზე დაჭერის შემდეგ გაიხსნება მთავარი მენიუ და აირჩიეთ 'Power'",
//             "შემდეგ აირჩიეთ 'Switch User'",
//             "შემდეგ აირჩიეთ 'New User'",
//             "შემდეგ აირჩიეთ 'Create User'",
//             "შემდეგ გამოჩნდება ორი ველი ელ.ფოსტის და პაროლის შესაყვანად. 'Sign-In ID' ში შეიყვანეთ ის ელ.ფოსტა რომელიც პროდუქტის შეძენისას მიიღეთ ხოლო 'Password' ში შეიყვანეთ ის პაროლი რომელიც ჩვენ გამოგიგზავნეთ პროდუქტის ელ.ფოსტასთან ერთად.",
//             "ანგარიში გააქტირებულია! ახლა გადადით 'Library'-ში და 'Purchased' განყოფილებიდან გადმოტვირთეთ თამაში რომელიც შეიძინეთ"
//         ];
//     }else if (document.getElementById('tutorialsDisplay').classList.contains('install_ps5')) {

//         steps = [
//             "", // Index 0, no tutorial message for the first page
//             "დააჭირეთ ღილაკს “PS” თქვენი კონსოლის კონტროლერზე (კონტროლერის ცენტრში მრგვალი ღლაკი Playstation ის ლოგოთი)",
//             "სამართავი მენიუდან აირჩიეთ 'Switch User'",
//             "შემდეგ აირჩიეთ 'New User'",
//             "შემდეგ აირჩიეთ 'Get Started'(არ აირჩიოთ 'Play as a One-Time Guest')!!!",
//             "შემდეგ გამოჩნდება ორი ველი ელ.ფოსტის და პაროლის შესაყვანად. 'Sign-In ID' ში შეიყვანეთ ის ელ.ფოსტა რომელიც პროდუქტის შეძენისას მიიღეთ ხოლო 'Password' ში შეიყვანეთ ის პაროლი რომელიც ჩვენ გამოგიგზავნეთ პროდუქტის ელ.ფოსტასთან ერთად.",
//             "შემდეგ დააჭირეთ 'Sign in' და არა 'Skip and Play Offline'",
//             "ანგარიში გააქტირებულია! ახლა გადადით 'Game Library'-ში და 'Your Collection' განყოფილებიდან გადმოტვირთეთ თამაში რომელიც შეიძინეთ"
//         ];
//     }
    

//     document.getElementById('tutorial').textContent = steps[currentPage];

//     nextPage.addEventListener('click', () => {
//         if (currentPage < pages) {
//             currentPage += 1;
//             document.getElementById('pageCounter').textContent = `${currentPage}/${pages}`;
//             document.getElementById('steps').textContent = `ნაბიჯი ${currentPage}`;
//             document.getElementById('tutorial').textContent = steps[currentPage];

//         }
//     })
//     previousPage.addEventListener('click', () => {
//         if (currentPage > 1) {
//             currentPage -= 1;
//             document.getElementById('pageCounter').textContent = `${currentPage}/${pages}`;
//             document.getElementById('steps').textContent = `ნაბიჯი ${currentPage}`;
//             document.getElementById('tutorial').textContent = steps[currentPage];

//         }
//     })


// });


// const installButtons = document.querySelectorAll('.installBtn');

// // Add click event listeners to each button
// installButtons.forEach(button => {
//     button.addEventListener('click', () => {
//         // Remove the activeInstallBtn class from all buttons
//         installButtons.forEach(btn => {
//             btn.classList.remove('activeInstallBtn');
//         });

//         // Add the activeInstallBtn class to the clicked button
//         button.classList.add('activeInstallBtn');
//     });
// });
// // display changer <<---------




// document.addEventListener('DOMContentLoaded', function () {
    
//     const installPs4 = document.getElementById('install__ps4');
//     const installPs5 = document.getElementById('install__ps5');
//     const installXb = document.getElementById('install__xb');
//     const installSw = document.getElementById('install__sw');

//     const tutorialsDisplay = document.getElementById('tutorialsDisplay');

//     const tutorialps4 = document.getElementById('tutorialps4');
//     const tutorialps5 = document.getElementById('tutorialps5');
//     const tutorialxb = document.getElementById('tutorialxb');
//     const tutorialsw = document.getElementById('tutorialsw');



//     installPs5.addEventListener('click', () => {
//         //remove class
//         tutorialsDisplay.classList.remove('install_xb');
//         tutorialsDisplay.classList.remove('install_sw');
//         tutorialsDisplay.classList.remove('install_ps4');
//         tutorialsDisplay.classList.add('install_ps5');
//         this.getElementById('steps').style.color = '#ffff';
//         this.getElementById('tutorialsw').style.color = "#ffff";
//         this.getElementById('previousPage').style.color = "#ffff";
//         this.getElementById('nextPage').style.color = "#ffff";
//         this.getElementById('pageCounter').style.color = "#ffff";

//     });

//     installPs4.addEventListener('click', () => {
//         //remove class
//         tutorialsDisplay.classList.remove('install_xb');
//         tutorialsDisplay.classList.remove('install_sw');
//         tutorialsDisplay.classList.add('install_ps4');
//         tutorialsDisplay.classList.remove('install_ps5');
//         this.getElementById('steps').style.color = '#fff';
//         this.getElementById('tutorialsw').style.color = "#fff";
//         this.getElementById('previousPage').style.color = "#fff";
//         this.getElementById('nextPage').style.color = "#fff";
//         this.getElementById('pageCounter').style.color = "#fff";
        
//     });

//     installXb.addEventListener('click', () => {
//         //remove class
//         tutorialsDisplay.classList.add('install_xb');
//         tutorialsDisplay.classList.remove('install_sw');
//         tutorialsDisplay.classList.remove('install_ps4');
//         tutorialsDisplay.classList.remove('install_ps5');
//         this.getElementById('steps').style.color = '#fff';
//         this.getElementById('tutorialsw').style.color = "#fff";
//         this.getElementById('previousPage').style.color = "#fff";
//         this.getElementById('nextPage').style.color = "#fff";
//         this.getElementById('pageCounter').style.color = "#fff";
//     });

//     installSw.addEventListener('click', () => {
//         //remove class
//         tutorialsDisplay.classList.remove('install_xb');
//         tutorialsDisplay.classList.add('install_sw');
//         tutorialsDisplay.classList.remove('install_ps4');
//         tutorialsDisplay.classList.remove('install_ps5');
//         this.getElementById('steps').style.color = '#151515';
//         this.getElementById('tutorialsw').style.color = "#3B3B3B";
//         this.getElementById('previousPage').style.color = "#3B3B3B";
//         this.getElementById('nextPage').style.color = "#3B3B3B";
//         this.getElementById('pageCounter').style.color = "#3B3B3B";
        
//     });
// });
