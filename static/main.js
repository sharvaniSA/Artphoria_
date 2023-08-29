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

