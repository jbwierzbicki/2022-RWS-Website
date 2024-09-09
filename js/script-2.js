// JavaScript Document

const progressBar = document.getElementById('progressBar');
const milestones = document.querySelectorAll('.milestone');
const checkmarks = document.querySelectorAll('.checkmark');
const viewCount = document.getElementById('viewCount');
const donationAmount = document.getElementById('donationAmount');

const currentViews = 100; // Example number, adjust as needed.........................change to update #

// Calculate the donation amount and progress
const donationPer100 = 100;
const milestonesPassed = Math.floor(currentViews / 100); // Adjusted for every 100 views
const currentDonation = milestonesPassed * donationPer100;
const progressPercentage = (currentViews / 1000) * 100;

progressBar.style.width = `${progressPercentage}%`;
progressBar.style.backgroundColor = '#eda107'; // Add this line to set the bar color

// Calculate and display the view count
const displayedViews = Math.floor(currentViews / 100) * 10;
viewCount.textContent = `${displayedViews}`;

donationAmount.textContent = `$${currentDonation}`;

// Change color of milestone circles and show checkmarks based on progress
milestones.forEach((milestone, index) => {
    if (index < milestonesPassed) {
        milestone.style.backgroundColor = '#eda107'; // Green color
        checkmarks[index].style.display = 'block'; // Display the checkmark
    } else {
        milestone.style.backgroundColor = ''; // Reset to default color
        checkmarks[index].style.display = 'none'; // Hide the checkmark
    }
});