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
