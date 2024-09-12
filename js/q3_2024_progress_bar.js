// JavaScript Document
// You can place this in a <script> tag in your HTML
// or in a separate JavaScript file linked in your HTML
const progressPercentage = document.getElementById("progressPercentage");
const progressBar = document.getElementById("progressBar");
const progressValue = document.getElementById("progressValue");

// Update the progress bar width
progressBar.style.width = progressPercentage.value + '%';

// Update the progress value display
progressValue.textContent = progressPercentage.value + '%';

// If you want to update the progress bar dynamically 
// as the percentage changes:
progressPercentage.addEventListener("change", function () {
    progressBar.style.width = progressPercentage.value + '%';
    progressValue.textContent = progressPercentage.value + '%';
});
