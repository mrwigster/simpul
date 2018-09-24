/*jshint esversion: 6 */
const switcher = document.getElementById('switchFlexGrid');
// The grid/column example.
const gridExample = document.getElementById('gridExample');


switcher.addEventListener("click", function(){
  if (switcher.getAttribute('data-current') == 'flex') {
    switcher.setAttribute('data-current', 'grid');
    gridExample.classList.remove('flex-wrap');
    gridExample.classList.add('grid-wrap');
    gridExample.style.opacity = 0;
    setTimeout(() => {
      gridExample.style.opacity = 1;
    }, 150);
  } else {
    switcher.setAttribute('data-current', 'flex');
    gridExample.classList.remove('grid-wrap');
    gridExample.classList.add('flex-wrap');
    gridExample.style.opacity = 0;
    setTimeout(() => {
      gridExample.style.opacity = 1;
    }, 150);
  }
});