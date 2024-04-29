window.addEventListener('DOMContentLoaded', event => {
    // Navbar function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }
    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate scrollspy on the navbar while visiting the page 
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };
    }
     ,)

     //login function 
     function validateForm() {

        var username = document.getElementById('username').value;

        var password = document.getElementById('password').value;

    

        if (username === 'client0' && password === '1234') {

            window.location.href = 'menu.html'; 

            return false; 

        }

        else if (username === 'admin0' && password === '5678') {

            window.location.href = 'cofadmin.html'; 

            return false; 

        }

        else {

            alert('Invalid username or password. Please try again.');

            return false; 

        }

    }