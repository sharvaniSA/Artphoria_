document.addEventListener('DOMContentLoaded', function () {
    // Create an array to store user likes for each artwork
    const userLikes = [];
    
    // Create an array to store user information for each artwork
    const userInformation = [];

    // Function to get a random user for demonstration purposes
    function getRandomUser() {
        const users = ["User1", "User2", "User3", "User4", "User5"];
        const randomIndex = Math.floor(Math.random() * users.length);
        return users[randomIndex];
    }

    // Function to update the leaderboard based on likes and user information
    function updateLeaderboard() {
        const leaderboardList = document.getElementById('leaderboard-list');
        
        // Clear the leaderboard
        leaderboardList.innerHTML = '';

        // Create a map to group likes and user information by artwork index
        const artworkData = new Map();

        // Iterate over userLikes and userInformation arrays
        userLikes.forEach((likes, index) => {
            const username = userInformation[index] || getRandomUser();
            const dataKey = `${username}_${likes}`;

            if (!artworkData.has(dataKey)) {
                artworkData.set(dataKey, []);
            }

            artworkData.get(dataKey).push(index);
        });

        // Sort the data and update the leaderboard
        const sortedData = [...artworkData.entries()].sort((a, b) => {
            const [usernameA, likesA] = a[0].split('_');
            const [usernameB, likesB] = b[0].split('_');
            return likesB - likesA;
        });

        sortedData.forEach(([dataKey, indices], rank) => {
            const [username, likes] = dataKey.split('_');

            // Create a leaderboard entry
            const leaderboardEntry = document.createElement('div');
            leaderboardEntry.classList.add('leaderboard-entry');
            leaderboardEntry.innerHTML = `<span class="leaderboard-rank">${rank + 1}.</span> ${username} (${likes} likes)`;

            // Append the entry to the leaderboard
            leaderboardList.appendChild(leaderboardEntry);
        });
    }

    const likeButtons = document.querySelectorAll('.like-button');

    likeButtons.forEach((likeButton, index) => {
        const likeCountElement = likeButton.querySelector('.like-count');

        likeButton.addEventListener('click', function () {
            // Toggle the 'liked' class on the clicked button
            this.classList.toggle('liked');

            // Update the like count based on the 'liked' class
            const likeCount = this.classList.contains('liked') ? 1 : -1;
            const currentCount = parseInt(likeCountElement.textContent);
            const newCount = currentCount + likeCount;
            likeCountElement.textContent = newCount;

            // Update userLikes array with likes for each artwork
            userLikes[index] = newCount;

            // Update userInformation array with a random user when the artwork is liked
            if (likeCount === 1) {
                userInformation[index] = getRandomUser();
            } else {
                userInformation[index] = undefined;
            }

            // Update the leaderboard
            updateLeaderboard();
        });
    });

    const commentSubmitButtons = document.querySelectorAll('.comment-submit');

    commentSubmitButtons.forEach(commentSubmitButton => {
        commentSubmitButton.addEventListener('click', function () {
            // Get the textarea value
            const textarea = this.previousElementSibling;
            const commentText = textarea.value;

            if (commentText.trim() !== '') {
                // Find the nearest .comments-section
                const commentsSection = this.closest('.comments-section');

                // Create a new comment element
                const comment = document.createElement('li');
                comment.innerHTML = `
                    <span class="comment-author">User123:</span>
                    <span class="comment-text">${commentText}</span>
                `;

                // Add the comment to the comments list
                const commentsList = commentsSection.querySelector('.comments-list');
                commentsList.appendChild(comment);

                // Clear the textarea
                textarea.value = '';
            }
        });
    });
});




