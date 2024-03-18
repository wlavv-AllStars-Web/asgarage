// Wrap the entire script in a function
function moveQuantityInput() {


    // Find the #quantity_wanted input element
    var quantityInput = document.querySelector('#quantity_wanted');
    
    // Find the .input-group-btn-vertical element
    var inputGroupVertical = document.querySelector('.input-group-btn-vertical');
    
    // Check if inputGroupVertical is null
    if (inputGroupVertical === null) {
        // If inputGroupVertical is null, retry after a short delay
        setTimeout(moveQuantityInput, 100);
        return; // Exit the function early
    }
    
    // Get the buttons within inputGroupVertical
    var buttons = inputGroupVertical.querySelectorAll('button');
    
    // Append the quantityInput between the buttons in inputGroupVertical
    if(quantityInput && inputGroupVertical){
        inputGroupVertical.insertBefore(quantityInput, buttons[1]);
    }

}

// Call the function when DOM content is loaded
document.addEventListener("DOMContentLoaded", moveQuantityInput);

document.addEventListener("DOMContentLoaded", () => {
    var carouselPositions;
    var halfContainer;
    var currentItem = 0;
    var nextButton = document.querySelector("#nextButton");
    var previousButton = document.querySelector("#previousButton");
    nextButton.style.color = "#fff";
    previousButton.style.color = "#373737";

    function getCarouselPositions() {
        carouselPositions = [];
        document.querySelectorAll('.collection-content .card').forEach(function(div) {
            carouselPositions.push([div.offsetLeft, div.offsetLeft + div.offsetWidth]); // add to array the positions information
        });
        halfContainer = document.querySelector('.collection-content').offsetWidth / 2;
    }

    function updateCarouselCounter() {
        var currentScrollLeft = document.querySelector('.collection-content').scrollLeft;
        var currentMiddlePosition = currentScrollLeft + halfContainer;

        // Find the current item index
        var currentItemIndex;
        for (var i = 0; i < carouselPositions.length; i++) {
            if (currentMiddlePosition > carouselPositions[i][0] && currentMiddlePosition < carouselPositions[i][1]) {
                currentItemIndex = i + 1; // Adding 1 to convert from zero-based index
                break;
            }
        }

        // Update carousel counter
        var totalItems = carouselPositions.length;
        document.getElementById('carouselCounter').textContent = currentItemIndex + '/' + totalItems;

        // Update button colors based on current item index
        if (currentItemIndex === 1) {
            console.log("primeiro")
            previousButton.style.color = "#373737";
            nextButton.style.color = "#fff";
        } else if (currentItemIndex === totalItems) {
            previousButton.style.color = "#fff";
            nextButton.style.color = "#373737";
            console.log("ultimo")
        } else {
            previousButton.style.color = "#fff";
            nextButton.style.color = "#fff";
            console.log("meio")
        }
    }

    function goCarousel(direction) {
        var currentScrollLeft = document.querySelector('.collection-content').scrollLeft;
        var currentScrollRight = currentScrollLeft + document.querySelector('.collection-content').offsetWidth;

        if (currentScrollLeft === 0 && direction === 'next') {
            currentItem = 1;
        } else if (currentScrollRight === document.querySelector('.collection-content').scrollWidth && direction === 'previous') {
            currentItem = carouselPositions.length - 2;
        } else {
            var currentMiddlePosition = currentScrollLeft + halfContainer;
            for (var i = 0; i < carouselPositions.length; i++) {
                if (currentMiddlePosition > carouselPositions[i][0] && currentMiddlePosition < carouselPositions[i][1]) {
                    currentItem = i;
                    if (direction === 'next') {
                        currentItem++;
                    } else if (direction === 'previous') {
                        currentItem--;
                    }

                    if (currentItem < 0) {
                        currentItem = 0;
                    } else if (currentItem >= carouselPositions.length) {
                        currentItem = carouselPositions.length - 1;
                    }
                    break;
                }
            }
        }

        document.querySelector('.collection-content').scrollTo({
            left: carouselPositions[currentItem][0],
            behavior: 'smooth'
        });

        updateCarouselCounter();
    }

    // Attach event listeners to buttons
    document.getElementById('previousButton').addEventListener('click', function() {
        goCarousel('previous');
    });

    document.getElementById('nextButton').addEventListener('click', function() {
        goCarousel('next');
    });

    // Call the function to initialize
    getCarouselPositions();

    // Add resize event listener
    window.addEventListener('resize', getCarouselPositions);

    document.querySelector('.collection-content').addEventListener('scroll', updateCarouselCounter);
});
