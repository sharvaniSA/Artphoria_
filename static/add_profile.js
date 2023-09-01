document.getElementById("profile-details").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var profileName = document.getElementById("profile-name").value;
    var profilePicture = document.getElementById("profile-picture").value;
    
    // Perform necessary actions with the user details (e.g., update profile)
    // ...
    
    alert("Profile updated successfully!");
    });