document.addEventListener('DOMContentLoaded', function () {
    const profileToggle = document.getElementById('profile-toggle');
    const verticalNavToggle = document.getElementById('menu-toggle');
    const profileNav = document.querySelector('.profile-nav');
    const verticalNav = document.querySelector('.vertical-nav');

    profileToggle.addEventListener('click', function () {
        profileNav.classList.toggle('open');
        if (verticalNav.classList.contains('open')) {
            verticalNav.classList.remove('open');
        }
    });

    verticalNavToggle.addEventListener('click', function () {
        verticalNav.classList.toggle('open');
        if (profileNav.classList.contains('open')) {
            profileNav.classList.remove('open');
        }
    });
});

// Get the current date and time
const currentDate = new Date();

// Format the date and time as needed (e.g., "September 15, 2023 - 10:30 AM")
const formattedDate = currentDate.toLocaleString('en-US', {
    month: 'long',
    day: 'numeric',
    year: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    hour12: true
});

// Update the article-date element with the formatted date and time
document.getElementById('article-date').textContent = formattedDate;


//
// document.addEventListener("DOMContentLoaded", function () {
//     const content = document.querySelector(".article-content");
//     const readMoreBtn = document.getElementById("readMoreBtn");

//     let isFull = false; // Initial state

//     // Function to toggle between full and truncated content
//     function toggleContent() {
//         isFull = !isFull;
//         if (isFull) {
//             content.classList.add("full");
//             readMoreBtn.innerText = "Read Less";
//         } else {
//             content.classList.remove("full");
//             readMoreBtn.innerText = "Read More";
//         }
//     }

//     // Add click event listener to "Read More" link
//     readMoreBtn.addEventListener("click", toggleContent);
// }); 