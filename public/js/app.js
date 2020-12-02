const registerNavSlide = () => {
    const burger = document.querySelector('nav .burger');
    const nav = document.querySelector('nav .nav-links');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        burger.classList.toggle('burger-active');
    });
}

const registerElectronicMessages = () => {
    window.addEventListener('DOMContentLoaded', (event) => {
        /**
         * Reveal E-Mail for Humans
         */
        let electronicMessages = document.getElementsByClassName('electronicMessage');

        if(electronicMessages) {
            for (let i = 0; i < electronicMessages.length; i++) {
                electronicMessages[i].classList.add('link');

                electronicMessages[i].onclick = function() {
                electronicMessages[i].href = 'mailto:' + atob(electronicMessages[i].dataset.href);
                };
            }
        }
    });
}

const registerScrollToAnker = () => {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash === "") {
            return;
        }
        
        if (window.location.pathname !== this.pathname) {
            return;
        }

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        var offset = 20;
        if ($(window).width() <= 768) {
            offset = 100;
        }

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top - offset
            }, 800, function(){
        });

        // Add hash (#) to URL when done scrolling (default click behavior)
        // and hold position
        var y = document.documentElement.scrollTop;
        window.location.hash = hash;    
        document.documentElement.scrollTop = y;

    });
}

const app = ()=> {
    $(document).ready(function() {
        registerNavSlide();
        registerElectronicMessages();
        registerScrollToAnker();
    });
}

app();