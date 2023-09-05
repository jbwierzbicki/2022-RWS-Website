// JavaScript Document

const progressBar = document.getElementById('progressBar');
const milestones = document.querySelectorAll('.milestone');
const checkmarks = document.querySelectorAll('.checkmark');
const viewCount = document.getElementById('viewCount');
const donationAmount = document.getElementById('donationAmount');

const currentViews = 215000; // Example number, adjust as needed

// Calculate the donation amount and progress
const donationPer100k = 500;
const milestonesPassed = Math.floor(currentViews / 200000);
const currentDonation = milestonesPassed * donationPer100k;
const progressPercentage = (currentViews / 1000000) * 100;

progressBar.style.width = `${progressPercentage}%`;
viewCount.textContent = `${(currentViews / 1000).toFixed(0)}k`;
donationAmount.textContent = `$${currentDonation}`;

// Change color of milestone circles and show checkmarks based on progress
milestones.forEach((milestone, index) => {
    if (index < milestonesPassed) {
        milestone.style.backgroundColor = '#4CAF50'; // Green color
        checkmarks[index].style.display = 'block'; // Display the checkmark
    }
});
