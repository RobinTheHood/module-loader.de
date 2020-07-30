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
