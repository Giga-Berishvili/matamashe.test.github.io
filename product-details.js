document.addEventListener('DOMContentLoaded', function() {

    
    const categorieBtns = document.querySelectorAll('.categorie__label');

    categorieBtns.forEach(categorieBtn => {
        categorieBtn.addEventListener('click', () => {
            // Remove the 'checked' class from all buttons
            categorieBtns.forEach(btn => {
                btn.classList.remove('checked');
            });

            // Add the 'checked' class to the clicked button
            categorieBtn.classList.add('checked');
        });
    });
    const versionBtns = document.querySelectorAll('.version__label'); // Change the variable name here

    versionBtns.forEach(versionBtn => { // Change the variable name here
        versionBtn.addEventListener('click', () => {
            // Remove the 'checked' class from all buttons
            versionBtns.forEach(btn => {
                btn.classList.remove('checked');
            });

            // Add the 'checked' class to the clicked button
            versionBtn.classList.add('checked');
        });
    });

    const editionBtns = document.querySelectorAll('.edition__label'); // Change the variable name here

    editionBtns.forEach(editionBtn => { // Change the variable name here
        editionBtn.addEventListener('click', () => {
            // Remove the 'checked' class from all buttons
            editionBtns.forEach(btn => {
                btn.classList.remove('checked');
            });

            // Add the 'checked' class to the clicked button
            editionBtn.classList.add('checked');
        });
    });


    const lowQuantityArrow = document.getElementById("lowQuantityArrow");
    const highQuantityArrow = document.getElementById("highQuantityArrow");
    const quantityInput = document.getElementById("quantityInput");

    lowQuantityArrow.addEventListener("click", () => {
        let value = parseInt(quantityInput.value);

        if (value > 1) {
            value--;
            quantityInput.value = value;
        }

        if (value === 1) {
            lowQuantityArrow.classList.add("arrowDisabled");
        }
    });

    highQuantityArrow.addEventListener("click", () => {
        let value = parseInt(quantityInput.value);
        value++;
        quantityInput.value = value;
        lowQuantityArrow.classList.remove("arrowDisabled");
    
        // Get the new price and convert it to a float
        let newPriceText = document.getElementById('newPrice').textContent;
        let newPrice = parseFloat(newPriceText.replace(/[^0-9.]/g, '')); // Extract numeric characters

        let oldPriceText = document.getElementById('oldPrice').textContent;
        let oldPrice = parseFloat(oldPriceText.replace(/[^0-9.]/g, '')); // Extract numeric characters
    
        // Check if newPrice is a valid number
        if (!isNaN(newPrice)) {
            document.getElementById('newPrice').textContent = newPrice * value + '.00₾';
            document.getElementById('oldPrice').textContent = oldPrice * value + '.00₾';
        } else {
            console.error("Invalid newPrice value:", newPriceText);
        }
    });

    
});


document.addEventListener("DOMContentLoaded", function () {
    // Add event listeners to filter inputs
    const priceFromInput = document.querySelector('input[name="pricefrom"]');
    const priceToInput = document.querySelector('input[name="priceto"]');
    const categoryInputs = document.querySelectorAll('input[name="categorie"]');
    const genreInputs = document.querySelectorAll('input[name="genre"]');
    const preorderInputs = document.querySelectorAll('input[name="preorder"]');

    // Add event listeners for filter changes
    priceFromInput.addEventListener("change", updateFilters);
    priceToInput.addEventListener("change", updateFilters);
    categoryInputs.forEach(input => input.addEventListener("change", updateFilters));
    genreInputs.forEach(input => input.addEventListener("change", updateFilters));
    preorderInputs.forEach(input => input.addEventListener("change", updateFilters));

    // Function to send AJAX request and update product list
    function updateFilters() {
        // Gather selected filter criteria here
        const filters = {
            priceFrom: priceFromInput.value,
            priceTo: priceToInput.value,
            category: getSelectedValues(categoryInputs),
            genre: getSelectedValues(genreInputs),
            preorder: getSelectedValues(preorderInputs)
        };

        // Send AJAX request with filters to a PHP script
        // Use the received data to update the product list
        // Implement this part according to your project's structure
        // Example: sendDataToPHP(filters);
    }

    // Function to get selected values from checkboxes/radio buttons
    function getSelectedValues(inputs) {
        const selectedValues = [];
        inputs.forEach(input => {
            if (input.checked) {
                selectedValues.push(input.value);
            }
        });
        return selectedValues;
    }
});