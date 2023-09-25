document.addEventListener('DOMContentLoaded', function() {
    const adminNavLinks = document.querySelectorAll('.admin_navigation_ul li');
    let activeLink = null;

    adminNavLinks.forEach(btn => {
        btn.addEventListener('click', () => {
            if (activeLink !== null) {
                activeLink.classList.remove('adminActive');
            }
            
            btn.classList.add('adminActive');
            activeLink = btn;
        });
    });


    const adminNavWrap = document.getElementById('adminNavWrap');
const panelUpperLeft = document.querySelector('.admin_nav_upperside_left');
const panelLinkTexts = document.querySelectorAll('.linkText');
const liElements = document.querySelectorAll('.admin_nav_link');
const ulGapper = document.querySelector('.admin_navigation_ul');

function toggleClasses() {
    adminNavWrap.classList.toggle('rotateWrapper'); // Add or toggle 'rotateWrapper' class on adminNavWrap
    ulGapper.classList.toggle('gapper');
    panelUpperLeft.classList.toggle('wrappedLeftSide');
    panelLinkTexts.forEach(txt => txt.classList.toggle('wrappedLinkTexts'));
    liElements.forEach(li => li.classList.toggle('wrappedLi'));
}

adminNavWrap.addEventListener('click', toggleClasses);

    
});



const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const checkmarks = document.querySelectorAll('.checkmarks');

checkboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', () => {
        const label = checkbox.nextElementSibling; // Get the associated label
        const checkmark = checkmarks[index]; // Get the associated checkmark

        if (checkbox.checked) {
            label.classList.add('checked');
            checkmark.classList.add('checked');
        } else {
            label.classList.remove('checked');
            checkmark.classList.remove('checked');
        }
        
    });

    const radioBtns = document.querySelectorAll('.radio_btn');

    radioBtns.forEach(radioBtn => {
        radioBtn.addEventListener('click', () => {
            // Remove the "showRadio" class from all "radioCenter" elements
            document.querySelectorAll('.radioCenter').forEach(center => {
                center.classList.remove('showRadio');
            });
    
            // Remove the "radioChecked" class from all "radio_btn" elements
            radioBtns.forEach(btn => {
                btn.classList.remove('radioChecked');
            });
    
            // Add the "showRadio" class to the clicked radio button's "radioCenter" element
            const center = radioBtn.querySelector('.radioCenter');
            center.classList.add('showRadio');
    
            // Add the "radioChecked" class to the clicked radio button
            radioBtn.classList.add('radioChecked');
        });
    });
    


// Get all input elements with the type "file" inside elements with class "profileImgDefault"
const fileInputs = document.querySelectorAll('.profileImgDefault input[type="file"]');

// Attach change event listeners to all file inputs
fileInputs.forEach(function(fileInput) {
    fileInput.addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'No file selected';
        
        // Find the associated "displayFileName" span element
        const displayFileNameElement = this.parentElement.querySelector('.displayFileName');
        
        // Update the content of the span element with the file name
        if (displayFileNameElement) {
            displayFileNameElement.textContent = fileName;
        }
    });
});
    
const alertElement = document.querySelector('.alert');
// Check if the alert element exists
if (alertElement) {
    // Set a timeout to remove the success or error class after 3 seconds
    setTimeout(function() {
        alertElement.classList.remove('alert_success', 'alert_error');
    }, 3000);
}


});


