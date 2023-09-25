document.addEventListener('DOMContentLoaded', function() {
    const profileLabels = document.querySelectorAll('.acc__img__labels label');

    profileLabels.forEach(profileLabel => {
        profileLabel.addEventListener('click', () => {
            // Remove the "selectedImage" class from all labels' images
            profileLabels.forEach(label => {
                label.querySelector('img').classList.remove('selectedImage');
            });

            // Add the "selectedImage" class to the clicked label's image
            profileLabel.querySelector('img').classList.add('selectedImage');
        });
    });

    const addCards = document.querySelectorAll('.add__cart__on__account');
    const cardDetails = document.querySelector('.add__cart__detailes__cr');
    
    // Function to handle clicks outside of cardDetails
    function handleClickOutside(event) {
        if (!cardDetails.contains(event.target)) {
            cardDetails.classList.remove('showCard');
        }
    }
    
    addCards.forEach(addCard => {
        addCard.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent the click event from propagating to the document body
    
            // Remove the "showCard" class from all other cardDetails elements
            const allCardDetails = document.querySelectorAll('.add__cart__detailes__cr');
            allCardDetails.forEach(item => {
                if (item !== cardDetails) {
                    item.classList.remove('showCard');
                }
            });
    
            // Toggle the "showCard" class on the clicked cardDetails
            cardDetails.classList.toggle('showCard');
        });
    });
    
    // Add a click event listener to the document body to handle clicks outside of cardDetails
    document.body.addEventListener('click', handleClickOutside);
    
});




















