document.addEventListener('DOMContentLoaded', function() {
    const sortingInput = document.getElementById('sortingInput');
    const sortingOptions = document.getElementById('sortingOptions');
    const inputArrow = document.getElementById('inputImg');

    sortingInput.addEventListener('click', () => {
        // Remove the activeInstallBtn class from all buttons
        
        inputArrow.style.transform = inputArrow.style.transform === 'rotate(-180deg)' ? 'rotate(0deg)' : 'rotate(-180deg)';
        sortingInput.classList.toggle('sortMenuBorder');
        sortingOptions.classList.toggle('showSortMenu');
    });

    const sortDisplayValue = document.getElementById('sortDisplayValue');
    const sortValue = sortingOptions.querySelectorAll('li');


    sortValue.forEach(li => {
        li.addEventListener('click', () => {
            sortDisplayValue.textContent = li.textContent;
            sortingOptions.classList.remove('showSortMenu');
        });
    });
});

// ---------------------------------------------------- >>>>>>>>>>>
document.addEventListener('DOMContentLoaded', function() {
    const filterDropdown = document.getElementById('filterGenre');
    const sortOptions = document.getElementById('genreFilterOptions');
    const filterArrow = document.getElementById('filteriInputImg');

    filterDropdown.addEventListener('click', () => {
        // Remove the activeInstallBtn class from all buttons
        
        filterArrow.style.transform = filterArrow.style.transform === 'rotate(-180deg)' ? 'rotate(0deg)' : 'rotate(-180deg)';
        filterDropdown.classList.toggle('sortMenuBorder');
        sortOptions.classList.toggle('showSortMenu');
    });

    const filterDisplayValue = document.getElementById('genreDisplayValue');
    const filterValue = sortOptions.querySelectorAll('li');


    filterValue.forEach(li => {
        li.addEventListener('click', () => {
            filterDisplayValue.textContent = li.textContent;
            sortOptions.classList.remove('showSortMenu');
        });
    });
});


// ---------------------------------------------------- >>>>>>>>>>>
document.addEventListener('DOMContentLoaded', function() {
    const filterDropdown = document.getElementById('ctgGenre');
    const sortOptions = document.getElementById('ctgFilterOptions');
    const filterArrow = document.getElementById('ctgiInputImg');

    filterDropdown.addEventListener('click', () => {
        // Remove the activeInstallBtn class from all buttons
        
        filterArrow.style.transform = filterArrow.style.transform === 'rotate(-180deg)' ? 'rotate(0deg)' : 'rotate(-180deg)';
        filterDropdown.classList.toggle('sortMenuBorder');
        sortOptions.classList.toggle('showSortMenu');
    });

    const filterDisplayValue = document.getElementById('ctgDisplayValue');
    const filterValue = sortOptions.querySelectorAll('li');


    filterValue.forEach(li => {
        li.addEventListener('click', () => {
            filterDisplayValue.textContent = li.textContent;
            sortOptions.classList.remove('showSortMenu');
        });
    });
});


// ---------------------------------------------------- >>>>>>>>>>>
document.addEventListener('DOMContentLoaded', function() {
    const showFilteringDataMenu = document.getElementById('showFilteringDataMenu');
    const dataFilterMenu = document.getElementById('dataFilterMenu');

    console.log(dataFilterMenu);

    showFilteringDataMenu.addEventListener('click', () => {
        // Remove the activeInstallBtn class from all buttons
        
        dataFilterMenu.classList.toggle('showDataFilter');
        showFilteringDataMenu.classList.toggle('sortMenuBorder');

    });

});

