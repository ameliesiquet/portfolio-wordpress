// script.js

document.addEventListener('DOMContentLoaded', () => {
    const textElement = document.getElementById('handwriting');
    const text = 'Amélie Siquet';
    let index = 0;

    function handwritingAnimation() {
        if (index < text.length) {
            textElement.textContent += text.charAt(index);
            index++;
            setTimeout(handwritingAnimation, 150); // Adjust typing speed here
        }
    }
    handwritingAnimation();
});