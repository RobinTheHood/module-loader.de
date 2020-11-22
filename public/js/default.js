"use strict";

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


$(document).ready(function(){
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

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 130
      }, 800, function(){
    });

    // Add hash (#) to URL when done scrolling (default click behavior)
    // and hold position
    var y = document.documentElement.scrollTop;
    window.location.hash = hash;    
    document.documentElement.scrollTop = y;

  });
});