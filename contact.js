document.addEventListener('DOMContentLoaded', function() {
    const inputLayouts = document.querySelectorAll('.input');

    inputLayouts.forEach(inputLayout => {
        const input = inputLayout.querySelector('input');
        const inputPlaceholder = inputLayout.querySelector('span');

        inputLayout.addEventListener('click', () => {
            // Remove the activeInstallBtn class from all buttons
            
            inputLayout.classList.add('input_clicked');
            input.style.display = 'block';
            inputPlaceholder.style.fontSize = "10px";
        });
    });
});
