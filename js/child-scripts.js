// Scroll to top button

const scrollToTopButton = document.getElementById('scroll-to-top-button');

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    scrollToTopButton.style.visibility = "visible";
    scrollToTopButton.style.opacity = 1;
  } else {
    scrollToTopButton.style.visibility = "hidden";
    scrollToTopButton.style.opacity = 0;
  }
}

scrollToTopButton.addEventListener('click', () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
})

/*
* #.# Ninja Forms loader on processing
*
*/
