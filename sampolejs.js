// Function to display text
function displayText() {
    // Get the element where text will be displayed
    const textDisplay = document.getElementById('textDisplay');
    
    // Set the text content of the element
    textDisplay.textContent = 'Hello, World!';
}

// Get the button element
const button = document.getElementById('myButton');

// Attach the function to the button's click event
button.addEventListener('click', displayText);
