

const $drowdownArrow = document.querySelector('.fa-caret-down');
const $checkbox = document.getElementById('openDropdown');
const $dropdownMenu = document.querySelector('.dropdown-menu');

$checkbox.addEventListener('change', () => {
  $drowdownArrow.classList.toggle('rotate-dropdown-arrow');
});

$dropdownMenu.addEventListener('click', (e) => {
  $checkbox.checked = false;
  $checkbox.dispatchEvent(new Event('change'));
});


$('.scrollto a').on('click', function() {

  let href = $(this).attr('href');

  $('html, body').animate({
      scrollTop: $(href).offset().top
  }, {
      duration: 370,   // по умолчанию «400» 
      easing: "linear" // по умолчанию «swing» 
  });

  return false;
});



















